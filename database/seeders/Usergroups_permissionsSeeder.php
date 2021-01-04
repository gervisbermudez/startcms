<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usergroups_permissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_usergroups_permissions = [

            //root
            ["usergroup_id" => "1", "permision_id" => "1"],
            ["usergroup_id" => "1", "permision_id" => "2"],
            ["usergroup_id" => "1", "permision_id" => "3"],
            ["usergroup_id" => "1", "permision_id" => "4"],
            ["usergroup_id" => "1", "permision_id" => "5"],
            ["usergroup_id" => "1", "permision_id" => "6"],
            ["usergroup_id" => "1", "permision_id" => "7"],
            ["usergroup_id" => "1", "permision_id" => "8"],
            ["usergroup_id" => "1", "permision_id" => "9"],
            ["usergroup_id" => "1", "permision_id" => "10"],
            ["usergroup_id" => "1", "permision_id" => "11"],
            ["usergroup_id" => "1", "permision_id" => "12"],
            ["usergroup_id" => "1", "permision_id" => "13"],
            ["usergroup_id" => "1", "permision_id" => "14"],
            ["usergroup_id" => "1", "permision_id" => "15"],
            ["usergroup_id" => "1", "permision_id" => "16"],
            ["usergroup_id" => "1", "permision_id" => "17"],
            ["usergroup_id" => "1", "permision_id" => "18"],
            ["usergroup_id" => "1", "permision_id" => "19"],
            ["usergroup_id" => "1", "permision_id" => "20"],
            ["usergroup_id" => "1", "permision_id" => "21"],
            ["usergroup_id" => "1", "permision_id" => "22"],
            ["usergroup_id" => "1", "permision_id" => "23"],
            ["usergroup_id" => "1", "permision_id" => "24"],
            ["usergroup_id" => "1", "permision_id" => "25"],
            ["usergroup_id" => "1", "permision_id" => "26"],
            ["usergroup_id" => "1", "permision_id" => "27"],
            ["usergroup_id" => "1", "permision_id" => "28"],
            ["usergroup_id" => "1", "permision_id" => "29"],
            ["usergroup_id" => "1", "permision_id" => "30"],
            ["usergroup_id" => "1", "permision_id" => "31"],
            ["usergroup_id" => "1", "permision_id" => "32"],
            ["usergroup_id" => "1", "permision_id" => "33"],
            ["usergroup_id" => "1", "permision_id" => "34"],
            ["usergroup_id" => "1", "permision_id" => "35"],
            ["usergroup_id" => "1", "permision_id" => "36"],

            //administrador
            ["usergroup_id" => "2", "permision_id" => "1"],
            ["usergroup_id" => "2", "permision_id" => "2"],
            ["usergroup_id" => "2", "permision_id" => "3"],
            ["usergroup_id" => "2", "permision_id" => "4"],
            ["usergroup_id" => "2", "permision_id" => "5"],
            ["usergroup_id" => "2", "permision_id" => "6"],
            ["usergroup_id" => "2", "permision_id" => "7"],
            ["usergroup_id" => "2", "permision_id" => "8"],
            ["usergroup_id" => "2", "permision_id" => "9"],
            ["usergroup_id" => "2", "permision_id" => "10"],
            ["usergroup_id" => "2", "permision_id" => "11"],
            ["usergroup_id" => "2", "permision_id" => "12"],
            ["usergroup_id" => "2", "permision_id" => "13"],
            ["usergroup_id" => "2", "permision_id" => "14"],
            ["usergroup_id" => "2", "permision_id" => "15"],
            ["usergroup_id" => "2", "permision_id" => "16"],
            ["usergroup_id" => "2", "permision_id" => "17"],
            ["usergroup_id" => "2", "permision_id" => "18"],
            ["usergroup_id" => "2", "permision_id" => "19"],
            ["usergroup_id" => "2", "permision_id" => "20"],
            ["usergroup_id" => "2", "permision_id" => "21"],
            ["usergroup_id" => "2", "permision_id" => "22"],
            ["usergroup_id" => "2", "permision_id" => "23"],
            ["usergroup_id" => "2", "permision_id" => "24"],
            ["usergroup_id" => "2", "permision_id" => "25"],
            ["usergroup_id" => "2", "permision_id" => "26"],
            ["usergroup_id" => "2", "permision_id" => "27"],
            ["usergroup_id" => "2", "permision_id" => "28"],
            ["usergroup_id" => "2", "permision_id" => "29"],
            ["usergroup_id" => "2", "permision_id" => "30"],
            ["usergroup_id" => "2", "permision_id" => "31"],
            ["usergroup_id" => "2", "permision_id" => "32"],
            ["usergroup_id" => "2", "permision_id" => "33"],
            ["usergroup_id" => "2", "permision_id" => "34"],
            ["usergroup_id" => "2", "permision_id" => "35"],
            ["usergroup_id" => "2", "permision_id" => "36"],

            //standar
            ["usergroup_id" => "3", "permision_id" => "2"],
            ["usergroup_id" => "3", "permision_id" => "4"],
            ["usergroup_id" => "3", "permision_id" => "6"],
            ["usergroup_id" => "3", "permision_id" => "7"],
            ["usergroup_id" => "3", "permision_id" => "9"],
            ["usergroup_id" => "3", "permision_id" => "10"],
            ["usergroup_id" => "3", "permision_id" => "11"],
            ["usergroup_id" => "3", "permision_id" => "12"],
            ["usergroup_id" => "3", "permision_id" => "14"],
            ["usergroup_id" => "3", "permision_id" => "16"],
            ["usergroup_id" => "3", "permision_id" => "17"],
            ["usergroup_id" => "3", "permision_id" => "19"],
            ["usergroup_id" => "3", "permision_id" => "20"],
            ["usergroup_id" => "3", "permision_id" => "21"],
            ["usergroup_id" => "3", "permision_id" => "22"],
            ["usergroup_id" => "3", "permision_id" => "23"],
            ["usergroup_id" => "3", "permision_id" => "24"],
            ["usergroup_id" => "3", "permision_id" => "25"],
            ["usergroup_id" => "3", "permision_id" => "26"],
            ["usergroup_id" => "3", "permision_id" => "27"],
            ["usergroup_id" => "3", "permision_id" => "29"],
            ["usergroup_id" => "3", "permision_id" => "30"],
            ["usergroup_id" => "3", "permision_id" => "31"],
            ["usergroup_id" => "3", "permision_id" => "33"],
            ["usergroup_id" => "3", "permision_id" => "34"],
            ["usergroup_id" => "3", "permision_id" => "36"],

            //publisher
            ["usergroup_id" => "4", "permision_id" => "2"],
            ["usergroup_id" => "4", "permision_id" => "6"],
            ["usergroup_id" => "4", "permision_id" => "7"],
            ["usergroup_id" => "4", "permision_id" => "9"],
            ["usergroup_id" => "4", "permision_id" => "10"],
            ["usergroup_id" => "4", "permision_id" => "11"],
            ["usergroup_id" => "4", "permision_id" => "12"],
            ["usergroup_id" => "4", "permision_id" => "14"],
            ["usergroup_id" => "4", "permision_id" => "21"],
            ["usergroup_id" => "4", "permision_id" => "22"],
            ["usergroup_id" => "4", "permision_id" => "24"],
            ["usergroup_id" => "4", "permision_id" => "25"],
            ["usergroup_id" => "4", "permision_id" => "26"],
            ["usergroup_id" => "4", "permision_id" => "27"],
            ["usergroup_id" => "4", "permision_id" => "29"],
            ["usergroup_id" => "4", "permision_id" => "30"],
            ["usergroup_id" => "4", "permision_id" => "31"],
            ["usergroup_id" => "4", "permision_id" => "33"],
            ["usergroup_id" => "4", "permision_id" => "34"],
            ["usergroup_id" => "4", "permision_id" => "36"],

            //editor
            ["usergroup_id" => "5", "permision_id" => "2"],
            ["usergroup_id" => "5", "permision_id" => "6"],
            ["usergroup_id" => "5", "permision_id" => "7"],
            ["usergroup_id" => "5", "permision_id" => "9"],
            ["usergroup_id" => "5", "permision_id" => "10"],
            ["usergroup_id" => "5", "permision_id" => "11"],
            ["usergroup_id" => "5", "permision_id" => "12"],
            ["usergroup_id" => "5", "permision_id" => "14"],
            ["usergroup_id" => "5", "permision_id" => "21"],
            ["usergroup_id" => "5", "permision_id" => "22"],
            ["usergroup_id" => "5", "permision_id" => "24"],
            ["usergroup_id" => "5", "permision_id" => "25"],
            ["usergroup_id" => "5", "permision_id" => "26"],
            ["usergroup_id" => "5", "permision_id" => "27"],
            ["usergroup_id" => "5", "permision_id" => "29"],
            ["usergroup_id" => "5", "permision_id" => "30"],
            ["usergroup_id" => "5", "permision_id" => "31"],
            ["usergroup_id" => "5", "permision_id" => "33"],
            ["usergroup_id" => "5", "permision_id" => "34"],
            ["usergroup_id" => "5", "permision_id" => "36"],
        ];

        DB::table('usergroups_permissions')->truncate();

        foreach ($default_usergroups_permissions as $value) {
            DB::table('usergroups_permissions')->insert(
                [
                    "usergroup_id" => $value["usergroup_id"],
                    "permision_id" => $value["permision_id"],
                    "status" => 1,
                    'created_at' => now(),
                ]);
        }
    }
}
