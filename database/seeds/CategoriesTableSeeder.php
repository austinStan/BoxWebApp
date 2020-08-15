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
                'name' => '0-100 acres',
                'slug' => '0-100-acres',
                'created_at' => '2020-08-10 17:44:53',
                'updated_at' => '2020-08-14 11:24:12',
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
            14 => 
            array (
                'id' => 18,
                'parent_id' => 4,
                'order' => 1,
                'name' => '200-300 acres',
                'slug' => '200-300-acres',
                'created_at' => '2020-08-14 10:42:31',
                'updated_at' => '2020-08-14 10:42:31',
            ),
            15 => 
            array (
                'id' => 19,
                'parent_id' => 4,
                'order' => 1,
                'name' => '300-400 acres',
                'slug' => '300-400-acres',
                'created_at' => '2020-08-14 10:42:53',
                'updated_at' => '2020-08-14 10:42:53',
            ),
            16 => 
            array (
                'id' => 20,
                'parent_id' => 4,
                'order' => 1,
                'name' => '400-500 acres',
                'slug' => '400-500-acres',
                'created_at' => '2020-08-14 10:43:06',
                'updated_at' => '2020-08-14 10:43:15',
            ),
            17 => 
            array (
                'id' => 21,
                'parent_id' => 4,
                'order' => 2,
                'name' => '100-200 acres',
                'slug' => '100-200-acres',
                'created_at' => '2020-08-14 10:44:29',
                'updated_at' => '2020-08-14 10:46:12',
            ),
            18 => 
            array (
                'id' => 22,
                'parent_id' => 7,
                'order' => 1,
                'name' => '150X300 meters',
                'slug' => '150x300-meters',
                'created_at' => '2020-08-14 10:51:39',
                'updated_at' => '2020-08-14 10:51:39',
            ),
            19 => 
            array (
                'id' => 23,
                'parent_id' => 7,
                'order' => 1,
                'name' => '300X400 meters',
                'slug' => '300x400-meters',
                'created_at' => '2020-08-14 10:52:03',
                'updated_at' => '2020-08-14 10:52:03',
            ),
            20 => 
            array (
                'id' => 24,
                'parent_id' => 7,
                'order' => 1,
                'name' => '400X500 meters',
                'slug' => '400x500-meters',
                'created_at' => '2020-08-14 10:52:25',
                'updated_at' => '2020-08-14 10:52:25',
            ),
            21 => 
            array (
                'id' => 25,
                'parent_id' => 7,
                'order' => 1,
                'name' => '500X800 meters',
                'slug' => '500x800-meters',
                'created_at' => '2020-08-14 10:52:53',
                'updated_at' => '2020-08-14 10:52:53',
            ),
            22 => 
            array (
                'id' => 29,
                'parent_id' => 9,
                'order' => 1,
                'name' => 'On Sale',
                'slug' => 'on-sale',
                'created_at' => '2020-08-14 20:02:23',
                'updated_at' => '2020-08-14 20:02:23',
            ),
            23 => 
            array (
                'id' => 30,
                'parent_id' => 29,
                'order' => 1,
                'name' => '1 bedroom',
                'slug' => '1-bedroom',
                'created_at' => '2020-08-14 20:02:47',
                'updated_at' => '2020-08-14 21:07:09',
            ),
            24 => 
            array (
                'id' => 31,
                'parent_id' => 29,
                'order' => 1,
                'name' => '2 bedrooms',
                'slug' => '2-bedrooms',
                'created_at' => '2020-08-14 20:03:11',
                'updated_at' => '2020-08-14 20:03:11',
            ),
            25 => 
            array (
                'id' => 32,
                'parent_id' => 29,
                'order' => 1,
                'name' => '3 bedrooms',
                'slug' => '3-bedrooms',
                'created_at' => '2020-08-14 20:03:25',
                'updated_at' => '2020-08-14 20:03:25',
            ),
            26 => 
            array (
                'id' => 33,
                'parent_id' => 29,
                'order' => 1,
                'name' => '4 bedrooms',
                'slug' => '4-bedrooms',
                'created_at' => '2020-08-14 20:03:43',
                'updated_at' => '2020-08-14 20:03:43',
            ),
            27 => 
            array (
                'id' => 34,
                'parent_id' => 29,
                'order' => 1,
                'name' => '5 bedrooms',
                'slug' => '5-bedrooms',
                'created_at' => '2020-08-14 20:04:24',
                'updated_at' => '2020-08-14 20:04:24',
            ),
            28 => 
            array (
                'id' => 35,
                'parent_id' => 29,
                'order' => 1,
                'name' => 'bungalow',
                'slug' => 'bungalow',
                'created_at' => '2020-08-14 20:04:59',
                'updated_at' => '2020-08-14 20:04:59',
            ),
            29 => 
            array (
                'id' => 36,
                'parent_id' => 10,
                'order' => 1,
                'name' => 'Sand',
                'slug' => 'sand',
                'created_at' => '2020-08-14 23:21:10',
                'updated_at' => '2020-08-14 23:24:49',
            ),
            30 => 
            array (
                'id' => 37,
                'parent_id' => 10,
                'order' => 1,
                'name' => 'Bricks',
                'slug' => 'bricks',
                'created_at' => '2020-08-14 23:21:19',
                'updated_at' => '2020-08-14 23:25:02',
            ),
            31 => 
            array (
                'id' => 38,
                'parent_id' => 10,
                'order' => 1,
                'name' => 'Floors&Tiles',
                'slug' => 'floorsandtiles',
                'created_at' => '2020-08-14 23:21:42',
                'updated_at' => '2020-08-14 23:25:29',
            ),
            32 => 
            array (
                'id' => 39,
                'parent_id' => 10,
                'order' => 1,
                'name' => 'Cement',
                'slug' => 'cement',
                'created_at' => '2020-08-14 23:22:03',
                'updated_at' => '2020-08-14 23:25:40',
            ),
            33 => 
            array (
                'id' => 40,
                'parent_id' => 10,
                'order' => 1,
                'name' => 'Roofing',
                'slug' => 'roofing',
                'created_at' => '2020-08-14 23:22:18',
                'updated_at' => '2020-08-14 23:26:50',
            ),
            34 => 
            array (
                'id' => 41,
                'parent_id' => 10,
                'order' => 1,
                'name' => 'Doors&Windows',
                'slug' => 'doorsandwindows',
                'created_at' => '2020-08-14 23:22:26',
                'updated_at' => '2020-08-14 23:26:03',
            ),
            35 => 
            array (
                'id' => 42,
                'parent_id' => 10,
                'order' => 1,
                'name' => 'Gutters',
                'slug' => 'gutters',
                'created_at' => '2020-08-14 23:22:52',
                'updated_at' => '2020-08-14 23:26:21',
            ),
            36 => 
            array (
                'id' => 43,
                'parent_id' => 10,
                'order' => 1,
                'name' => 'Paint',
                'slug' => 'paint',
                'created_at' => '2020-08-14 23:23:12',
                'updated_at' => '2020-08-14 23:24:28',
            ),
            37 => 
            array (
                'id' => 44,
                'parent_id' => 10,
                'order' => 1,
                'name' => 'Domestic Hardware',
                'slug' => 'domestic-hardware',
                'created_at' => '2020-08-14 23:23:26',
                'updated_at' => '2020-08-14 23:24:17',
            ),
            38 => 
            array (
                'id' => 45,
                'parent_id' => 36,
                'order' => 1,
                'name' => 'lake-sand',
                'slug' => 'lake-sand',
                'created_at' => '2020-08-14 23:28:25',
                'updated_at' => '2020-08-14 23:28:25',
            ),
            39 => 
            array (
                'id' => 46,
                'parent_id' => 36,
                'order' => 1,
                'name' => 'river sand',
                'slug' => 'river-sand',
                'created_at' => '2020-08-14 23:28:44',
                'updated_at' => '2020-08-14 23:28:44',
            ),
            40 => 
            array (
                'id' => 47,
                'parent_id' => 37,
                'order' => 1,
                'name' => 'fire bricks',
                'slug' => 'fire-bricks',
                'created_at' => '2020-08-14 23:41:00',
                'updated_at' => '2020-08-14 23:41:00',
            ),
            41 => 
            array (
                'id' => 48,
                'parent_id' => 37,
                'order' => 1,
                'name' => 'half bricks',
                'slug' => 'half-bricks',
                'created_at' => '2020-08-14 23:41:15',
                'updated_at' => '2020-08-14 23:41:15',
            ),
            42 => 
            array (
                'id' => 49,
                'parent_id' => 37,
                'order' => 1,
                'name' => 'concrete bricks',
                'slug' => 'concrete-bricks',
                'created_at' => '2020-08-14 23:41:36',
                'updated_at' => '2020-08-14 23:41:36',
            ),
            43 => 
            array (
                'id' => 50,
                'parent_id' => 38,
                'order' => 1,
                'name' => 'Stair Eding',
                'slug' => 'stair-eding',
                'created_at' => '2020-08-14 23:47:33',
                'updated_at' => '2020-08-14 23:47:33',
            ),
            44 => 
            array (
                'id' => 51,
                'parent_id' => 38,
                'order' => 1,
                'name' => 'carpet trims',
                'slug' => 'carpet-trims',
                'created_at' => '2020-08-14 23:47:55',
                'updated_at' => '2020-08-14 23:47:55',
            ),
            45 => 
            array (
                'id' => 52,
                'parent_id' => 38,
                'order' => 1,
                'name' => 'floor runners',
                'slug' => 'floor-runners',
                'created_at' => '2020-08-14 23:48:20',
                'updated_at' => '2020-08-14 23:48:20',
            ),
            46 => 
            array (
                'id' => 53,
                'parent_id' => 39,
                'order' => 1,
                'name' => 'tororo',
                'slug' => 'tororo',
                'created_at' => '2020-08-14 23:50:08',
                'updated_at' => '2020-08-14 23:50:08',
            ),
            47 => 
            array (
                'id' => 54,
                'parent_id' => 39,
                'order' => 1,
                'name' => 'hima',
                'slug' => 'hima',
                'created_at' => '2020-08-14 23:50:29',
                'updated_at' => '2020-08-14 23:50:29',
            ),
            48 => 
            array (
                'id' => 55,
                'parent_id' => 39,
                'order' => 1,
                'name' => 'kampala',
                'slug' => 'kampala',
                'created_at' => '2020-08-14 23:50:51',
                'updated_at' => '2020-08-14 23:50:51',
            ),
            49 => 
            array (
                'id' => 56,
                'parent_id' => 40,
                'order' => 1,
                'name' => 'roofing tools',
                'slug' => 'roofing-tools',
                'created_at' => '2020-08-14 23:51:43',
                'updated_at' => '2020-08-14 23:51:43',
            ),
            50 => 
            array (
                'id' => 57,
                'parent_id' => 40,
                'order' => 1,
                'name' => 'iron sheets',
                'slug' => 'iron-sheets',
                'created_at' => '2020-08-14 23:52:10',
                'updated_at' => '2020-08-14 23:52:10',
            ),
            51 => 
            array (
                'id' => 58,
                'parent_id' => 40,
                'order' => 1,
                'name' => 'wood fasteners',
                'slug' => 'wood-fasteners',
                'created_at' => '2020-08-14 23:52:29',
                'updated_at' => '2020-08-14 23:52:29',
            ),
            52 => 
            array (
                'id' => 59,
                'parent_id' => 41,
                'order' => 1,
                'name' => 'interior doors',
                'slug' => 'interior-doors',
                'created_at' => '2020-08-14 23:53:36',
                'updated_at' => '2020-08-14 23:53:36',
            ),
            53 => 
            array (
                'id' => 60,
                'parent_id' => 41,
                'order' => 1,
                'name' => 'panic and exit doors',
                'slug' => 'panic-and-exit-doors',
                'created_at' => '2020-08-14 23:54:05',
                'updated_at' => '2020-08-14 23:54:05',
            ),
            54 => 
            array (
                'id' => 61,
                'parent_id' => 41,
                'order' => 1,
                'name' => 'aluminium doors and windows',
                'slug' => 'aluminium-doors-and-windows',
                'created_at' => '2020-08-14 23:54:33',
                'updated_at' => '2020-08-14 23:54:33',
            ),
            55 => 
            array (
                'id' => 62,
                'parent_id' => 42,
                'order' => 1,
                'name' => 'guttering tools',
                'slug' => 'guttering-tools',
                'created_at' => '2020-08-14 23:55:32',
                'updated_at' => '2020-08-14 23:55:32',
            ),
            56 => 
            array (
                'id' => 63,
                'parent_id' => 42,
                'order' => 1,
                'name' => 'splash blocks',
                'slug' => 'splash-blocks',
                'created_at' => '2020-08-14 23:55:51',
                'updated_at' => '2020-08-14 23:55:51',
            ),
            57 => 
            array (
                'id' => 64,
                'parent_id' => 42,
                'order' => 1,
                'name' => 'gutter guards',
                'slug' => 'gutter-guards',
                'created_at' => '2020-08-14 23:56:39',
                'updated_at' => '2020-08-14 23:56:39',
            ),
            58 => 
            array (
                'id' => 65,
                'parent_id' => 43,
                'order' => 1,
                'name' => 'spray paint',
                'slug' => 'spray-paint',
                'created_at' => '2020-08-14 23:57:41',
                'updated_at' => '2020-08-14 23:57:41',
            ),
            59 => 
            array (
                'id' => 66,
                'parent_id' => 43,
                'order' => 1,
                'name' => 'brushes',
                'slug' => 'brushes',
                'created_at' => '2020-08-14 23:57:56',
                'updated_at' => '2020-08-14 23:57:56',
            ),
            60 => 
            array (
                'id' => 67,
                'parent_id' => 44,
                'order' => 1,
                'name' => 'locks and accessories',
                'slug' => 'locks-and-accessories',
                'created_at' => '2020-08-14 23:59:47',
                'updated_at' => '2020-08-14 23:59:47',
            ),
            61 => 
            array (
                'id' => 68,
                'parent_id' => 44,
                'order' => 1,
                'name' => 'fasteners and hinges',
                'slug' => 'fasteners-and-hinges',
                'created_at' => '2020-08-15 00:00:11',
                'updated_at' => '2020-08-15 00:00:11',
            ),
            62 => 
            array (
                'id' => 69,
                'parent_id' => 11,
                'order' => 1,
                'name' => 'pipes',
                'slug' => 'pipes',
                'created_at' => '2020-08-15 00:01:40',
                'updated_at' => '2020-08-15 00:01:40',
            ),
            63 => 
            array (
                'id' => 70,
                'parent_id' => 11,
                'order' => 1,
                'name' => 'metals',
                'slug' => 'metals',
                'created_at' => '2020-08-15 00:02:41',
                'updated_at' => '2020-08-15 00:02:41',
            ),
            64 => 
            array (
                'id' => 71,
                'parent_id' => 11,
                'order' => 1,
                'name' => 'laundary  &  bathrooms',
                'slug' => 'laundary-and-bathrooms',
                'created_at' => '2020-08-15 00:03:34',
                'updated_at' => '2020-08-15 00:03:34',
            ),
            65 => 
            array (
                'id' => 72,
                'parent_id' => 11,
                'order' => 1,
                'name' => 'machines',
                'slug' => 'machines',
                'created_at' => '2020-08-15 00:03:57',
                'updated_at' => '2020-08-15 00:03:57',
            ),
            66 => 
            array (
                'id' => 74,
                'parent_id' => 69,
                'order' => 1,
                'name' => 'pipes and tubes',
                'slug' => 'pipes-and-tubes',
                'created_at' => '2020-08-15 00:08:07',
                'updated_at' => '2020-08-15 00:08:07',
            ),
            67 => 
            array (
                'id' => 75,
                'parent_id' => 69,
                'order' => 1,
                'name' => 'pipe fittings',
                'slug' => 'pipe-fittings',
                'created_at' => '2020-08-15 00:08:27',
                'updated_at' => '2020-08-15 00:08:27',
            ),
            68 => 
            array (
                'id' => 76,
                'parent_id' => 70,
                'order' => 1,
                'name' => 'iron bars',
                'slug' => 'iron-bars',
                'created_at' => '2020-08-15 00:08:53',
                'updated_at' => '2020-08-15 00:08:53',
            ),
            69 => 
            array (
                'id' => 77,
                'parent_id' => 70,
                'order' => 1,
                'name' => 'steel  hollow section',
                'slug' => 'steel-hollow-section',
                'created_at' => '2020-08-15 00:09:14',
                'updated_at' => '2020-08-15 00:09:14',
            ),
            70 => 
            array (
                'id' => 78,
                'parent_id' => 70,
                'order' => 1,
                'name' => 'millwork',
                'slug' => 'millwork',
                'created_at' => '2020-08-15 00:09:39',
                'updated_at' => '2020-08-15 00:09:39',
            ),
            71 => 
            array (
                'id' => 79,
                'parent_id' => 71,
                'order' => 1,
                'name' => 'bathrooms',
                'slug' => 'bathrooms',
                'created_at' => '2020-08-15 00:10:18',
                'updated_at' => '2020-08-15 00:10:18',
            ),
            72 => 
            array (
                'id' => 80,
                'parent_id' => 71,
                'order' => 1,
                'name' => 'shower tubs',
                'slug' => 'shower-tubs',
                'created_at' => '2020-08-15 00:11:01',
                'updated_at' => '2020-08-15 00:11:01',
            ),
            73 => 
            array (
                'id' => 81,
                'parent_id' => 71,
                'order' => 1,
                'name' => 'valves and parts',
                'slug' => 'valves-and-parts',
                'created_at' => '2020-08-15 00:11:23',
                'updated_at' => '2020-08-15 00:11:23',
            ),
            74 => 
            array (
                'id' => 82,
                'parent_id' => 72,
                'order' => 1,
                'name' => 'washing machines',
                'slug' => 'washing-machines',
                'created_at' => '2020-08-15 00:14:31',
                'updated_at' => '2020-08-15 00:14:31',
            ),
            75 => 
            array (
                'id' => 83,
                'parent_id' => 72,
                'order' => 1,
                'name' => 'water heaters',
                'slug' => 'water-heaters',
                'created_at' => '2020-08-15 00:15:40',
                'updated_at' => '2020-08-15 00:15:40',
            ),
            76 => 
            array (
                'id' => 84,
                'parent_id' => 12,
                'order' => 1,
                'name' => 'Wires and Cables',
                'slug' => 'wires-and-cables',
                'created_at' => '2020-08-15 00:17:51',
                'updated_at' => '2020-08-15 00:17:51',
            ),
            77 => 
            array (
                'id' => 85,
                'parent_id' => 12,
                'order' => 1,
                'name' => 'lightings',
                'slug' => 'lightings',
                'created_at' => '2020-08-15 00:18:16',
                'updated_at' => '2020-08-15 00:18:16',
            ),
            78 => 
            array (
                'id' => 86,
                'parent_id' => 13,
                'order' => 1,
                'name' => 'cows',
                'slug' => 'cows',
                'created_at' => '2020-08-15 00:18:45',
                'updated_at' => '2020-08-15 00:18:45',
            ),
            79 => 
            array (
                'id' => 87,
                'parent_id' => 13,
                'order' => 1,
                'name' => 'goats',
                'slug' => 'goats',
                'created_at' => '2020-08-15 00:19:01',
                'updated_at' => '2020-08-15 00:19:01',
            ),
            80 => 
            array (
                'id' => 88,
                'parent_id' => 86,
                'order' => 1,
                'name' => 'kigezi',
                'slug' => 'kigezi',
                'created_at' => '2020-08-15 00:20:38',
                'updated_at' => '2020-08-15 00:20:38',
            ),
            81 => 
            array (
                'id' => 89,
                'parent_id' => 86,
                'order' => 1,
                'name' => 'fresians',
                'slug' => 'fresians',
                'created_at' => '2020-08-15 00:20:58',
                'updated_at' => '2020-08-15 00:20:58',
            ),
            82 => 
            array (
                'id' => 90,
                'parent_id' => 86,
                'order' => 1,
                'name' => 'ankole cows',
                'slug' => 'ankole-cows',
                'created_at' => '2020-08-15 00:21:17',
                'updated_at' => '2020-08-15 00:21:17',
            ),
            83 => 
            array (
                'id' => 91,
                'parent_id' => 87,
                'order' => 1,
                'name' => 'kigezi goats',
                'slug' => 'kigezi-goats',
                'created_at' => '2020-08-15 00:22:01',
                'updated_at' => '2020-08-15 00:22:01',
            ),
            84 => 
            array (
                'id' => 92,
                'parent_id' => 87,
                'order' => 1,
                'name' => 'alpine breed',
                'slug' => 'alpine-breed',
                'created_at' => '2020-08-15 00:22:20',
                'updated_at' => '2020-08-15 00:22:20',
            ),
            85 => 
            array (
                'id' => 93,
                'parent_id' => 14,
                'order' => 1,
                'name' => 'service apartments',
                'slug' => 'service-apartments',
                'created_at' => '2020-08-15 00:23:13',
                'updated_at' => '2020-08-15 00:23:13',
            ),
            86 => 
            array (
                'id' => 94,
                'parent_id' => 14,
                'order' => 1,
                'name' => 'hotels',
                'slug' => 'hotels',
                'created_at' => '2020-08-15 00:23:26',
                'updated_at' => '2020-08-15 00:24:15',
            ),
            87 => 
            array (
                'id' => 95,
                'parent_id' => 15,
                'order' => 1,
                'name' => 'luxury',
                'slug' => 'luxury',
                'created_at' => '2020-08-15 00:24:53',
                'updated_at' => '2020-08-15 00:24:53',
            ),
            88 => 
            array (
                'id' => 96,
                'parent_id' => 15,
                'order' => 1,
                'name' => 'commercial',
                'slug' => 'commercial',
                'created_at' => '2020-08-15 00:25:15',
                'updated_at' => '2020-08-15 00:25:15',
            ),
            89 => 
            array (
                'id' => 97,
                'parent_id' => 16,
                'order' => 1,
                'name' => 'fruits',
                'slug' => 'fruits',
                'created_at' => '2020-08-15 00:26:10',
                'updated_at' => '2020-08-15 00:26:10',
            ),
            90 => 
            array (
                'id' => 98,
                'parent_id' => 16,
                'order' => 1,
                'name' => 'vegetables',
                'slug' => 'vegetables',
                'created_at' => '2020-08-15 00:26:32',
                'updated_at' => '2020-08-15 00:26:32',
            ),
        ));
        
        
    }
}