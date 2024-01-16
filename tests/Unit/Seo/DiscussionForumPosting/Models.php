<?php
namespace Tests\Unit\Seo\DiscussionForumPosting;

use Carbon\Carbon;
use Coyote\Forum;
use Coyote\Post;
use Coyote\Topic;
use Coyote\User;
use Tests\Unit\Seo;

trait Models
{
    use Seo\Fixture\Store;

    function newThread(string $topicTitle, string $forumSlug): Topic
    {
        return $this->storeThread(
            new Forum(['slug' => $forumSlug]),
            new Topic(['title' => $topicTitle]));
    }

    function newTopicTitle(string $title): Topic
    {
        return $this->storeThread(new Forum, new Topic(['title' => $title]));
    }

    function newTopicAuthorLegacyGuest(string $username): Topic
    {
        return $this->storeThread(new Forum, new Topic, new Post(['user_name' => $username]));
    }

    function newTopicAuthorUsername(string $username): Topic
    {
        $user = new User;
        $user->name = $username;
        $user->email = 'irrelevant';
        $user->save();
        return $this->newTopicAuthorUser($user);
    }

    function newUser(): User
    {
        $user = new User;
        $user->name = 'irrelevant';
        $user->email = 'email@irrelevant';
        $user->save();
        return $user;
    }

    function newTopicAuthorUser(User $user): Topic
    {
        return $this->storeThread(new Forum, new Topic, new Post(['user_id' => $user->id]));
    }

    function newTopicReplies(int $replies): Topic
    {
        $topic = new Topic;
        $topic->replies = $replies;
        return $this->storeThread(new Forum, $topic);
    }

    function newThreadPostContent(string $content): Topic
    {
        return $this->storeThread(new Forum, new Topic, new Post(['text' => $content]));
    }

    function newTopicCreatedAt(string $date, string $timezone): Topic
    {
        $forum = new Forum([
            'name'        => 'irrelevant',
            'slug'        => $this->forumSlug(),
            'description' => 'irrelevant',
        ]);
        $forum->save();

        $topic = new Topic(['title' => 'irrelevant', 'forum_id' => $forum->id]);

        /* 
         $topic->save() is only here because of Topic.getRank(),
         which overrides created_at, if id isn't set :| So we save().
         If we remove .getRank(), or it no longer sets created_at,
         this .save() and lines above can be removed(); 
        */
        $topic->save();
        $topic->created_at = new Carbon($date, $timezone);
        $this->storeThread($forum, $topic);
        return $topic;
    }

    function forumSlug(): string
    {
        /**
         * We need to produce a unique forum slug, since
         * the system doesn't properly handle duplicated forum slugs,
         * and infinite redirects occur. Additionally,
         * forum slug cannot contain digits.
         */
        return 'irrelevant.' . \preg_replace('/\d+/', 'x', uniqid());
    }
}
