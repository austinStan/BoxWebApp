<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'austinstan24@gmail.com',
                'avatar' => 'admins/August2020/veq4r1oGUMHjB9Lwxbd6.jpg',
                'password' => '$2y$10$XW21KMObhWZUs/Sb6Byfu.1xagj0S92TDtelTWbThvbdHzUb7Liza',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-13 16:42:00',
                'updated_at' => '2020-08-13 17:02:05',
            ),
        ));
        
        
    }
}