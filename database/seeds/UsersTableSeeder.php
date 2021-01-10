<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::Truncate();
        $adminRole = Role::where('name', 'admin')->first();
        $contributorRole = Role::where('name', 'contributor')->first();

        $admin = User::Create([
            'name' => 'User1',
            'email' => 'user1@admin.com',
            'password' => bcrypt('user1')
        ]);

        $contributor = User::Create([
            'name' => 'User2',
            'email' => 'user2@contributor.com',
            'password' => bcrypt('user2')
        ]);

        $admin->roles()->attach($adminRole);
        $contributor->roles()->attach($contributorRole);
    }
}
