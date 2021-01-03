<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'CREATE_USER', 
            'UPDATE_USER', 
            'DELETE_USER',
            'SELECT_USERS',
            'UPDATE_USERS',
            'CREATE_PAGE',
            'UPDATE_PAGE',
            'DELETE_PAGE',
            'SELECT_PAGES',
            'UPDATE_PAGES',
            'CREATE_FORM_CUSTOM',
            'UPDATE_FORM_CUSTOM',
            'DELETE_FORM_CUSTOM',
            'SELECT_FORM_CUSTOMS',
            'CREATE_MENU',
            'UPDATE_MENU',
            'DELETE_MENU',
            'SELECT_MENUS',
            'UPDATE_MENUS',
            'CREATE_FILE',
            'UPDATE_FILE',
            'DELETE_FILE',
            'SELECT_FILES',
            'UPDATE_FILES',
            'CREATE_CATEGORIE',
            'UPDATE_CATEGORIE',
            'DELETE_CATEGORIE',
            'SELECT_CATEGORIES',
            'UPDATE_CATEGORIES',
            'PUBLISH_PAGES',
            'PUBLISH_FORM_CUSTOM',
            'CREATE_CONTENT_DATA',
            'UPDATE_CONTENT_DATA',
            'DELETE_CONTENT_DATA',
            'SELECT_CONTENT_DATA',
        ];

        DB::table('permissions')->truncate();

        foreach ($permissions as $key => $value) {
            DB::table('permissions')->insert(['permision_name' => $value, 'created_at' => now()]);
        }

        
    }
}
