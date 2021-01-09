<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $default_users = [
            [
                'name' => 'root',
                'username' => 'root',
                'email' => 'root@domain.com',
                'password' => Hash::make('root'),
                'usergroup_id' => '1',
            ],
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@domain.com',
                'password' => Hash::make('admin'),
                'usergroup_id' => '2',
            ],
        ];

        foreach ($default_users as $value) {
            DB::table('users')->insert(
                [
                    "name" => $value["name"],
                    "username" => $value["username"],
                    "email" => $value["email"],
                    "password" => $value["password"],
                    'usergroup_id' => $value["usergroup_id"],
                ]);
        }

    }
}
