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
                'id' => 1,
                'role_id' => 1,
                'first_name' => 'Austin',
                'last_name' => 'Stanley',
                'email' => 'austinstan24@gmail.com',
                'avatar' => 'users/default.png',
                'phone_number' => 759189296,
                'email_verified_at' => NULL,
                'password' => '$2y$10$6a2gYzYUmeAH5hIhhgnaGOPA.wo43mWZzGel8YTfcBZaREEj.x1AS',
                'remember_token' => 'QrBBTri6DwFY6jMw3c6y2d8nS9uQN027JN0nvUymorVxGwu9lAWOOe1MOB2F',
                'settings' => NULL,
                'created_at' => '2020-08-07 17:38:32',
                'updated_at' => '2020-08-08 16:43:00',
            ),
            1 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'first_name' => 'Diane',
                'last_name' => 'Stanley',
                'email' => 'austinstanleybi@gmail.com',
                'avatar' => 'users/default.png',
                'phone_number' => 759189296,
                'email_verified_at' => NULL,
                'password' => '$2y$10$zJfPRs95Jkl6L2CDGmHZbOtjtVIuMrcEu6ei/km0Hn1pF0sTq6PVa',
                'remember_token' => 'ULu3cKT8c9IQOqk4TESfsQCNRhrWw999DUXbTFBAV2KWfqAB9ZB0ZiCVtgml',
                'settings' => NULL,
                'created_at' => '2020-08-08 19:21:07',
                'updated_at' => '2020-08-08 19:21:07',
            ),
        ));
        
        
    }
}