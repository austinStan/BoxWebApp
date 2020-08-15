<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 4,
                'role_id' => NULL,
                'first_name' => 'customer-2',
                'last_name' => 'customer-2',
                'email' => 'austinstanleybi@gmail.com',
                'avatar' => 'users/default.png',
                'phone_number' => 759189296,
                'email_verified_at' => NULL,
                'password' => '$2y$10$xXHQvSd2zjWp2UwoYNqvo.QG.XpHfHm70X5ITQ.Uv9Srdbfp93KQK',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-13 16:57:42',
                'updated_at' => '2020-08-13 16:57:42',
            ),
            1 => 
            array (
                'id' => 5,
                'role_id' => NULL,
                'first_name' => 'customer-3',
                'last_name' => 'customer-3',
                'email' => 'austinstan24@gmail.com',
                'avatar' => 'users/default.png',
                'phone_number' => 759189296,
                'email_verified_at' => NULL,
                'password' => '$2y$10$zavUCD17XCCDVjnZho43QOYNSmk57GDTsdcEx1uvFNsjDJTJ6Z6FW',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-14 21:08:45',
                'updated_at' => '2020-08-14 21:08:45',
            ),
        ));
        
        
    }
}