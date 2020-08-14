<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 51,
                'name' => '60 acres in Mpigi, Central Uganda',
                'slug' => 'land-1',
                'description' => 'Located along mpindi rd in Ruhindi subcounty.24km along masaka rd',
                'image' => 'products/August2020/rMgUChSrrNKacclMtzzy.png',
                'price' => 50000000,
                'created_at' => '2020-08-13 16:16:21',
                'updated_at' => '2020-08-13 16:16:21',
            ),
            1 => 
            array (
                'id' => 52,
                'name' => '50X100 meters in Mbale.',
                'slug' => 'land-2',
                'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.',
                'image' => 'products/August2020/YgmkMVyd0lAxHbfdgRjg.png',
                'price' => 700000000,
                'created_at' => '2020-08-13 17:12:24',
                'updated_at' => '2020-08-13 17:12:24',
            ),
        ));
        
        
    }
}