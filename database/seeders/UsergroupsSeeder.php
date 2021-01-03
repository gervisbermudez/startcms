<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsergroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_usergroups = [
            [
                "name" => "root",
                "description" => "All permisions allowed",
                "level" => 1,
                "user_id" => 0,
                "parent_id" => 1,
                "status" => 1,
            ],
            [
                "name" => "administrador",
                "description" => "All configurations allowed",
                "level" => 2,
                "user_id" => 0,
                "parent_id" => 1,
                "status" => 1,
            ],
            [
                "name" => "standar",
                "description" => "Not delete permisions allowed",
                "level" => 2,
                "user_id" => 0,
                "parent_id" => 1,
                "status" => 1,
            ],
            [
                "name" => "publisher",
                "description" => "Only Insert and Update permisions allowed",
                "level" => 2,
                "user_id" => 0,
                "parent_id" => 1,
                "status" => 1,
            ],
            [
                "name" => "editor",
                "description" => "Only insert permisions allowed",
                "level" => 5,
                "user_id" => 0,
                "parent_id" => 1,
                "status" => 1,
            ],
        ];

        DB::table('usergroups')->truncate();

        foreach ($default_usergroups as $value) {
            DB::table('usergroups')->insert(
                [
                    "name" => $value["name"],
                    "description" => $value["description"],
                    "level" => $value["level"],
                    "user_id" => $value["user_id"],
                    "parent_id" => $value["parent_id"],
                    "status" => 1,
                    'created_at' => now(),
                ]);
        }
    }
}
