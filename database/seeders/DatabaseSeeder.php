<?php

namespace Database\Seeders;

use Database\Seeders\PermissionsSeeder;
use Database\Seeders\SiteConfigSeeder;
use Database\Seeders\UsergroupsSeeder;
use Database\Seeders\Usergroups_permissionsSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionsSeeder::class,
            UsergroupsSeeder::class,
            Usergroups_permissionsSeeder::class,
            UserSeeder::class,
            SiteConfigSeeder::class,
        ]);
    }
}
