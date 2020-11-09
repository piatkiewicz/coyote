<?php

namespace Tests\Browser;

use Coyote\Permission;
use Coyote\Services\UrlBuilder;
use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ForumTest extends DuskTestCase
{
    public function testShowValidateErrors()
    {
        $forum = $this->createForum(['require_tag' => true]);
        $user = $this->createUserWithGroup();

        $this->browse(function (Browser $browser) use ($forum, $user) {
            try {
                $browser
                    ->loginAs($user)
                    ->visitRoute('forum.topic.submit', ['forum' => $forum])
                    ->pressAndWaitFor('Zapisz')
                    ->assertSee('Temat musi posiadać minimum 3 znaki długości.')
                    ->assertSee('Proszę wpisać treść.')
                    ->assertSee('Wymagane jest przypisanie minimum jednego tagu do tego wątku.');
            } finally {
                $forum->delete();
            }
        });
    }

    public function testWriteTopic()
    {
        $forum = $this->createForum();
        $user = $this->createUserWithGroup();

        $this->browse(function (Browser $browser) use ($forum, $user) {
            $faker = Factory::create();

            $browser
                ->loginAs($user)
                ->visitRoute('forum.topic.submit', ['forum' => $forum])

                ->type('tags', 'c#')
                ->keys('input[name="tags"]', '{enter}')
                ->keys('input[name="tags"]', '{escape}')
                ->pause(500)
                ->click('input[name="subject"]')
                ->type('subject', $title = $faker->text())
                ->type('text', $text = $faker->realText())
                ->press('Zapisz')
                ->pause(1000)
                ->assertSee($title)
                ->assertSee($text)
                ->assertSee('c#');
        });
    }

    public function testWriteInLockedCategory()
    {
        $forum = $this->createForum(['is_locked' => true, 'name' => 'some locked category']);

        $this->assertTrue($forum->is_locked);

        $this->browse(function (Browser $browser) use ($forum) {
            try {
                $browser
                    ->visit('/Forum')
                    ->clickLink($forum->name)
                    ->assertDontSee('Nowy wątek')
                    ->visitRoute('forum.topic.submit', [$forum])
                    ->assertSee('401');
            } finally {
                $forum->delete();
            }
        });
    }

    public function testWriteInLockedTopic()
    {
        $forum = $this->createForum();
        $topic = $this->createTopic($forum->id, ['is_locked' => true]);
        $user = $this->createUserWithGroup();

        $this->browse(function (Browser $browser) use ($user, $forum, $topic) {
            try {
                $browser
                    ->loginAs($user)
                    ->visit(UrlBuilder::topic($topic))
                    ->assertDontSee('Odpowiedz');
            } finally {
                $topic->forceDelete();
                $forum->delete();
                $user->delete();
            }
        });
    }

    public function testWriteInLockedTopicAsAdmin()
    {
        $user = $this->createUserWithGroup();
        $forum = $this->createForum([], $user->groups()->first()->id);

        $forum->permissions()->create(['value' => 1, 'group_id' => $user->groups()->first()->id, 'permission_id' => Permission::where('name', 'forum-update')->get()->first()->id]);

        $topic = $this->createTopic($forum->id, ['is_locked' => true]);

        $this->browse(function (Browser $browser) use ($user, $forum, $topic) {
            $faker = Factory::create();
            $text = $faker->text;

            try {
                $browser
                    ->loginAs($user)
                    ->visit(UrlBuilder::topic($topic))
                    ->assertSee('Odpowiedz')
                    ->clickLink('Odpowiedz')
                    ->with('#js-submit-form', function ($form) use ($text) {
                        $form->type('textarea[name="text"]', $text)
                            ->press('Zapisz');
                    })
                    ->waitForText($text);
            } finally {
                $topic->forceDelete();
                $forum->delete();
                $user->delete();
            }
        });
    }

    public function testForumAccess()
    {
        $user = $this->createUserWithGroup();
        $forum = $this->createForum([], $user->groups()->first()->id);

        $this->browse(function (Browser $browser) use ($user, $forum) {
            try {
                $browser
                    ->visit('/Forum')
                    ->assertDontSeeIn('h3', $forum->name)
                    ->visit('/Forum/' . $forum->slug)
                    ->assertSee('401')
                    ->loginAs($user)
                    ->visit('/Forum')
                    ->assertSee($forum->name)
                    ->clickLink($forum->name);
            } finally {
                $forum->delete();
                $user->delete();
            }
        });
    }
}
