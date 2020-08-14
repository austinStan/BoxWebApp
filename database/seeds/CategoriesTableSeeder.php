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
            5 => 
            array (
                'id' => 9,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Houses',
                'slug' => 'houses',
                'created_at' => '2020-08-13 17:15:47',
                'updated_at' => '2020-08-13 17:15:47',
            ),
            6 => 
            array (
                'id' => 10,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Building Materials',
                'slug' => 'building-materials',
                'created_at' => '2020-08-13 17:15:58',
                'updated_at' => '2020-08-13 17:15:58',
            ),
            7 => 
            array (
                'id' => 11,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Plumbing Tools',
                'slug' => 'plumbing-tools',
                'created_at' => '2020-08-13 17:16:15',
                'updated_at' => '2020-08-13 17:16:15',
            ),
            8 => 
            array (
                'id' => 12,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Electricals and Wirings',
                'slug' => 'electricals-and-wirings',
                'created_at' => '2020-08-13 17:16:26',
                'updated_at' => '2020-08-13 17:16:26',
            ),
            9 => 
            array (
                'id' => 13,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Livestock',
                'slug' => 'livestock',
                'created_at' => '2020-08-13 17:16:38',
                'updated_at' => '2020-08-13 17:16:38',
            ),
            10 => 
            array (
                'id' => 14,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Apartments',
                'slug' => 'apartments',
                'created_at' => '2020-08-14 10:32:38',
                'updated_at' => '2020-08-14 10:32:38',
            ),
            11 => 
            array (
                'id' => 15,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Vehicles',
                'slug' => 'vehicles',
                'created_at' => '2020-08-14 10:34:39',
                'updated_at' => '2020-08-14 10:34:39',
            ),
            12 => 
            array (
                'id' => 16,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Groceries',
                'slug' => 'groceries',
                'created_at' => '2020-08-14 10:34:48',
                'updated_at' => '2020-08-14 10:34:48',
            ),
            13 => 
            array (
                'id' => 17,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Services',
                'slug' => 'services',
                'created_at' => '2020-08-14 10:34:56',
                'updated_at' => '2020-08-14 10:34:56',
            ),
        ));
        
        
    }
}