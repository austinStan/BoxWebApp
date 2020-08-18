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
                'name' => 'Austin',
                'email' => 'austinstan24@gmail.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$9Dsf.9vGMMpNEEVU2DS9geQSHj26griN0N6znTSfxZrnbgLBZtuI.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-08-18 00:35:35',
                'updated_at' => '2020-08-18 00:35:35',
            ),
        ));
        
        
    }
}