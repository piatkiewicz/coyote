<?php
namespace Database\Seeders;

use Coyote;
use Coyote\Group;
use Coyote\User;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    use \SchemaBuilder;

    public function run(): void
    {
        $group = new Group(['name' => 'Administrator']);
        $group->system = true;
        $group->save();

        $user = new User([
            'name'       => 'admin',
            'email'      => 'admin@localhost',
            'password'   => bcrypt('admin'),
            'reputation' => 10000,
        ]);
        $user->is_confirm = true;
        $user->gdpr = '{}';
        $user->save();

        Coyote\Group\User::query()->create([
            'group_id' => $group->id,
            'user_id'  => $user->id,
        ]);
    }
}
