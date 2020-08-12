<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Land',
                'slug' => 'land',
                'created_at' => '2020-08-10 17:43:48',
                'updated_at' => '2020-08-10 17:43:48',
            ),
            1 => 
            array (
                'id' => 4,
                'parent_id' => 3,
                'order' => 1,
                'name' => 'Acres',
                'slug' => 'acres',
                'created_at' => '2020-08-10 17:44:08',
                'updated_at' => '2020-08-10 17:44:08',
            ),
            2 => 
            array (
                'id' => 5,
                'parent_id' => 4,
                'order' => 1,
                'name' => '50-100 acres',
                'slug' => '50-100a',
                'created_at' => '2020-08-10 17:44:53',
                'updated_at' => '2020-08-12 16:37:41',
            ),
            3 => 
            array (
                'id' => 7,
                'parent_id' => 3,
                'order' => 1,
                'name' => 'Plots',
                'slug' => 'plots',
                'created_at' => '2020-08-12 16:37:54',
                'updated_at' => '2020-08-12 16:37:54',
            ),
            4 => 
            array (
                'id' => 8,
                'parent_id' => 7,
                'order' => 1,
                'name' => '50x100 meters',
                'slug' => '50x100m',
                'created_at' => '2020-08-12 16:38:22',
                'updated_at' => '2020-08-12 16:38:22',
            ),
        ));
        
        
    }
}