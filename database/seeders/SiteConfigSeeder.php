<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $default_config = [
            [
                "user_id" => "1",
                "config_name" => "SITE_TITLE",
                "config_value" => "Start CMS",
                "config_description" => "",
                "config_type" => "seo",
                "config_data" => '{"type_value": "string","validate_as": "text","max_lenght": "120","min_lenght": "5","handle_as": "input","input_type": "text","perm_values": null}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_DESCRIPTION",
                "config_value" => "My awesome website made with Start CMS",
                "config_description" => "",
                "config_type" => "seo",
                "config_data" => '{"type_value": "string","validate_as": "text","max_lenght": "120","min_lenght": "5","handle_as": "input","input_type": "text","perm_values": null}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_ADMIN_EMAIL",
                "config_value" => "gervisbermudez@outlook.com",
                "config_description" => "",
                "config_type" => "seo",
                "config_data" => '{"type_value": "string","validate_as": "email","max_lenght": "150","min_lenght": "5","handle_as": "input","input_type": "email","perm_values": null}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_LANGUAGE",
                "config_value" => "en",
                "config_description" => "",
                "config_type" => "seo",
                "config_data" => '{"type_value": "string","validate_as": "text","max_lenght": "50","min_lenght": "0","handle_as": "select","input_type": "select","perm_values": ["en", "esp"]}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_TIME_ZONE",
                "config_value" => "UTC-10",
                "config_description" => "",
                "config_type" => "general",
                "config_data" => '{"type_value": "string","validate_as": "text","max_lenght": "50","min_lenght": "0","handle_as": "select","input_type": "select","perm_values": {  "UTC-12": "UTC-12",  "UTC-11.5": "UTC-11:30",  "UTC-11": "UTC-11",  "UTC-10.5": "UTC-10:30",  "UTC-10": "UTC-10",  "UTC-9.5": "UTC-9:30",  "UTC-9": "UTC-9",  "UTC-8.5": "UTC-8:30",  "UTC-8": "UTC-8",  "UTC-7.5": "UTC-7:30",  "UTC-7": "UTC-7",  "UTC-6.5": "UTC-6:30",  "UTC-6": "UTC-6",  "UTC-5.5": "UTC-5:30",  "UTC-5": "UTC-5",  "UTC-4.5": "UTC-4:30",  "UTC-4": "UTC-4",  "UTC-3.5": "UTC-3:30",  "UTC-3": "UTC-3",  "UTC-2.5": "UTC-2:30",  "UTC-2": "UTC-2",  "UTC-1.5": "UTC-1:30",  "UTC-1": "UTC-1",  "UTC-0.5": "UTC-0:30",  "UTC+0": "UTC+0",  "UTC+0.5": "UTC+0:30",  "UTC+1": "UTC+1",  "UTC+1.5": "UTC+1:30",  "UTC+2": "UTC+2",  "UTC+2.5": "UTC+2:30",  "UTC+3": "UTC+3",  "UTC+3.5": "UTC+3:30",  "UTC+4": "UTC+4",  "UTC+4.5": "UTC+4:30",  "UTC+5": "UTC+5",  "UTC+5.5": "UTC+5:30",  "UTC+5.75": "UTC+5:45",  "UTC+6": "UTC+6",  "UTC+6.5": "UTC+6:30",  "UTC+7": "UTC+7",  "UTC+7.5": "UTC+7:30",  "UTC+8": "UTC+8",  "UTC+8.5": "UTC+8:30",  "UTC+8.75": "UTC+8:45",  "UTC+9": "UTC+9",  "UTC+9.5": "UTC+9:30",  "UTC+10": "UTC+10",  "UTC+10.5": "UTC+10:30",  "UTC+11": "UTC+11",  "UTC+11.5": "UTC+11:30",  "UTC+12": "UTC+12",  "UTC+12.75": "UTC+12:45",  "UTC+13": "UTC+13",  "UTC+13.75": "UTC+13:45",  "UTC+14": "UTC+14"  }  }',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_DATE_FORMAT",
                "config_value" => "j \d F \d Y",
                "config_description" => "",
                "config_type" => "general",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_TIME_FORMAT",
                "config_value" => "H:i",
                "config_description" => "",
                "config_type" => "general",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_LIST_MAX_ENTRY",
                "config_value" => "10",
                "config_description" => "",
                "config_type" => "general",
                "config_data" => '{"type_value":"number","validate_as":"number","max_lenght":"50","min_lenght":"0"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_LIST_PUBLIC",
                "config_value" => "Si",
                "config_description" => "",
                "config_type" => "general",
                "config_data" => '{"type_value": "boolean","validate_as": "boolean","handle_as": "switch","input_type": "switch","perm_values": ["No", "Si"],"true": "Si"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_AUTHOR",
                "config_value" => "Gervis Bermudez",
                "config_description" => "",
                "config_type" => "seo",
                "config_data" => '{"type_value":"string","validate_as":"name","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "LAST_UPDATE_FILEMANAGER",
                "config_value" => "",
                "config_description" => "",
                "config_type" => "general",
                "config_data" => '{"type_value": "string","validate_as": "text","max_lenght": "50","min_lenght": "5","handle_as": "input","input_type": "text","perm_values": null}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "ANALYTICS_ACTIVE",
                "config_value" => "Off",
                "config_description" => "",
                "config_type" => "analytics",
                "config_data" => '{"type_value": "boolean","validate_as": "boolean","handle_as": "switch","input_type": "switch","perm_values": ["Off", "On"],"true": "On"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "ANALYTICS_ID",
                "config_value" => "UA-XXXXX-Y",
                "config_description" => "",
                "config_type" => "analytics",
                "config_data" => '{"type_value": "string","validate_as": "text","max_lenght": "50","min_lenght": "5","handle_as": "input","input_type": "text","perm_values": null}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "ANALYTICS_CODE",
                "config_value" => "<script> window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date; ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview'); </script> <script async src='https://www.google-analytics.com/analytics.js'></script>",
                "config_description" => "",
                "config_type" => "analytics",
                "config_data" => '{"type_value": "string","validate_as": "text","max_lenght": "","min_lenght": "5","handle_as": "input","input_type": "text","perm_values": null}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "PIXEL_ACTIVE",
                "config_value" => "Off",
                "config_description" => "",
                "config_type" => "pixel",
                "config_data" => '{"type_value": "boolean","validate_as": "boolean","handle_as": "switch","input_type": "switch","perm_values": ["Off", "On"],"true": "On"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "PIXEL_CODE",
                "config_value" => "",
                "config_description" => "",
                "config_type" => "pixel",
                "config_data" => '{"type_value": "string","validate_as": "text","max_lenght": "","min_lenght": "5","handle_as": "input","input_type": "text","perm_values": null}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "THEME_PATH",
                "config_value" => "awesomeTheme",
                "config_description" => "",
                "config_type" => "theme",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "UPDATER_LAST_CHECK_UPDATE",
                "config_value" => "",
                "config_description" => "",
                "config_type" => "updater",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "UPDATER_MANUAL_CHECK",
                "config_value" => "On",
                "config_description" => "",
                "config_type" => "updater",
                "config_data" => '{"type_value": "boolean","validate_as": "boolean","handle_as": "switch","input_type": "switch","perm_values": ["Off", "On"],"true": "On"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "UPDATER_LAST_CHECK_DATA",
                "config_value" => '{"name":"Start CMS","version":"1.6.2","description":"A simple theme building for StartCMS","url":"https://github.com/gervisbermudez/startCodeIgniter-CSM.git","updated":"12/1/2020 18:8:5"}',
                "config_description" => "",
                "config_type" => "updater",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SYSTEM_LOGGER",
                "config_value" => "Yes",
                "config_description" => "",
                "config_type" => "logger",
                "config_data" => '{"type_value": "boolean","validate_as": "boolean","handle_as": "switch","input_type": "switch","perm_values": ["No", "Yes"],"true": "Yes"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITEM_TRACK_VISITORS",
                "config_value" => "Yes",
                "config_description" => "",
                "config_type" => "logger",
                "config_data" => '{"type_value": "boolean","validate_as": "boolean","handle_as": "switch","input_type": "switch","perm_values": ["No", "Yes"],"true": "Yes"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SYSTEM_API_LOGGER",
                "config_value" => "Yes",
                "config_description" => "",
                "config_type" => "updater",
                "config_data" => '{"type_value": "boolean","validate_as": "boolean","handle_as": "switch","input_type": "switch","perm_values": ["No", "Yes"],"true": "Yes"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_ERROR_404_PAGE",
                "config_value" => "",
                "config_description" => "",
                "config_type" => "general",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_HOME_PAGE",
                "config_value" => "",
                "config_description" => "",
                "config_type" => "general",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_TELEPHONE",
                "config_value" => "",
                "config_description" => "",
                "config_type" => "seo",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_ADDRESS",
                "config_value" => "Buenos Aires, Argentina",
                "config_description" => "",
                "config_type" => "updater",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_LINK_GITHUB",
                "config_value" => "https://github.com/gervisbermudez",
                "config_description" => "",
                "config_type" => "updater",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_LINK_TWITTER",
                "config_value" => "https://twitter.com/gervisbermudez",
                "config_description" => "",
                "config_type" => "updater",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_LINK_INSTAGRAM",
                "config_value" => "https://www.instagram.com/gervisbermudez",
                "config_description" => "",
                "config_type" => "updater",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
            [
                "user_id" => "1",
                "config_name" => "SITE_ADDRESS_LINK_MAP",
                "config_value" => "https://goo.gl/maps/6ZD6EUpxAUGMVgHd8",
                "config_description" => "",
                "config_type" => "updater",
                "config_data" => '{"type_value":"string","validate_as":"text","max_lenght":"50","min_lenght":"5"}',
                "readonly" => "0",
            ],
        ];

        DB::table('site_configs')->truncate();

        foreach ($default_config as $value) {
            DB::table('site_configs')->insert(
                [
                    "user_id" => $value["user_id"],
                    "config_name" => $value["config_name"],
                    "config_value" => $value["config_value"],
                    "config_description" => $value["config_description"],
                    "config_type" => $value["config_type"],
                    "config_data" => $value["config_data"],
                    "readonly" => $value["readonly"],
                    "status" => 1,
                    'created_at' => now(),
                ]);
        }
    }
}