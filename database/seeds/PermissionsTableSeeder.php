<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-08 10:27:27',
                'updated_at' => '2020-08-08 10:27:27',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-08-08 10:27:28',
                'updated_at' => '2020-08-08 10:27:28',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2020-08-12 17:01:52',
                'updated_at' => '2020-08-12 17:01:52',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2020-08-12 17:01:52',
                'updated_at' => '2020-08-12 17:01:52',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2020-08-12 17:01:52',
                'updated_at' => '2020-08-12 17:01:52',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2020-08-12 17:01:52',
                'updated_at' => '2020-08-12 17:01:52',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2020-08-12 17:01:52',
                'updated_at' => '2020-08-12 17:01:52',
            ),
        ));
        
        
    }
}