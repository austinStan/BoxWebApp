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
                'name' => '50X100 meters in Mbale District along the main road',
                'slug' => 'land-2',
                'description' => 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.',
                'image' => 'products/August2020/YgmkMVyd0lAxHbfdgRjg.png',
                'price' => 700000000,
                'created_at' => '2020-08-13 17:12:00',
                'updated_at' => '2020-08-15 10:00:48',
            ),
            2 => 
            array (
                'id' => 53,
                'name' => '2square miles of acres at Senyu Buikwe District',
                'slug' => 'land-3',
                'description' => 'Letters of administration under process.each acres is sold at 7million',
                'image' => 'products/August2020/L2R3zdFK2wz08aUrjAM9.png',
                'price' => 700000000,
                'created_at' => '2020-08-14 11:13:00',
                'updated_at' => '2020-08-14 11:15:49',
            ),
            3 => 
            array (
                'id' => 54,
                'name' => '30 acres at Mabira Kinoni Village',
                'slug' => 'land-4',
                'description' => 'Located at mabira kinoni village on block 308,plot16',
                'image' => 'products/August2020/v4TaTr81W7oxOlSfvrjm.png',
                'price' => 20000000,
                'created_at' => '2020-08-14 11:28:00',
                'updated_at' => '2020-08-14 11:34:14',
            ),
            4 => 
            array (
                'id' => 55,
                'name' => '170 acres at Kasanda Bukuya Village',
                'slug' => 'land-5',
                'description' => 'Located on block 483,plot34',
                'image' => 'products/August2020/fLFuVa12OSJLvvYtsNa9.png',
                'price' => 3000000,
                'created_at' => '2020-08-14 11:39:00',
                'updated_at' => '2020-08-14 11:52:20',
            ),
            5 => 
            array (
                'id' => 56,
                'name' => '11 acres at ngombele Nsangi Village',
                'slug' => 'land-6',
                'description' => 'Further more located along the shores on block 552,plot 73 along katoosi rd.',
                'image' => 'products/August2020/MpPCb2mS2Q0mTffbsj48.png',
                'price' => 30000000,
                'created_at' => '2020-08-14 11:42:00',
                'updated_at' => '2020-08-14 11:52:37',
            ),
            6 => 
            array (
                'id' => 57,
                'name' => '20 acres at Nakisungu,Luseera Village',
                'slug' => 'land-7',
                'description' => 'Located on block 259, plot 93',
                'image' => 'products/August2020/nCfQRtIkCorwallOI4rE.png',
                'price' => 40000000,
                'created_at' => '2020-08-14 11:46:34',
                'updated_at' => '2020-08-14 11:46:34',
            ),
            7 => 
            array (
                'id' => 58,
                'name' => '7 acres at Luseera Village Nakisungu',
                'slug' => 'land-8',
                'description' => 'located on block 259 ,plot 116 along katoosi road',
                'image' => 'products/August2020/dAGOiVt3cAE7So3Vdd7H.png',
                'price' => 40000000,
                'created_at' => '2020-08-14 11:51:58',
                'updated_at' => '2020-08-14 11:51:58',
            ),
            8 => 
            array (
                'id' => 59,
                'name' => '50 acres  at Namataba Jinja road,mukono',
                'slug' => 'land-9',
                'description' => 'Locatedat nagojja branch off',
                'image' => 'products/August2020/hH2sTHy1XjXyhf8OY5ma.png',
                'price' => 15000000,
                'created_at' => '2020-08-14 17:31:00',
                'updated_at' => '2020-08-14 17:46:55',
            ),
            9 => 
            array (
                'id' => 60,
                'name' => '318 acres katosi kijiko in Mukono',
                'slug' => 'land-10',
                'description' => 'Found on block 447,plots 66,67 .It touches the lake side',
                'image' => 'products/August2020/yjQ9tZEg2i0BuFMmLxN1.png',
                'price' => 60000000,
                'created_at' => '2020-08-14 18:58:00',
                'updated_at' => '2020-08-14 18:59:20',
            ),
            10 => 
            array (
                'id' => 61,
                'name' => '200 acres located  in Mityana District Uganda',
                'slug' => 'land-11',
                'description' => 'Located along Mityana rd',
                'image' => 'products/August2020/GfcY6C6ruX5ikQ9X8KTi.png',
                'price' => 700000000,
                'created_at' => '2020-08-14 19:02:00',
                'updated_at' => '2020-08-15 10:01:45',
            ),
            11 => 
            array (
                'id' => 62,
                'name' => '250 acres located in Mubende District Uganda',
                'slug' => 'land-12',
                'description' => 'Located near nakayima hill.title to be got in 2-3 months',
                'image' => 'products/August2020/k6Q7iIbYq0WWp9GuacvP.png',
                'price' => 90000000,
                'created_at' => '2020-08-14 19:04:00',
                'updated_at' => '2020-08-15 10:02:37',
            ),
            12 => 
            array (
                'id' => 63,
                'name' => '2 bedrooms in Wakiso District',
                'slug' => '2-bedrooms-1',
                'description' => 'With a kitchen,garage and a swimming pool',
                'image' => 'products/August2020/AQz6dNouPLk04NH5PXZk.png',
                'price' => 30000000,
                'created_at' => '2020-08-14 20:08:00',
                'updated_at' => '2020-08-15 14:18:32',
            ),
            13 => 
            array (
                'id' => 64,
                'name' => '2 bedrooms in Ntinda town',
                'slug' => '2-bedrooms-2',
                'description' => 'with a kitchen,garage and and a large sitting room',
                'image' => 'products/August2020/IFQYcWxuM3RTs4F8kIZp.png',
                'price' => 50000000,
                'created_at' => '2020-08-14 20:48:00',
                'updated_at' => '2020-08-14 20:50:17',
            ),
            14 => 
            array (
                'id' => 65,
                'name' => 'Lake Sand',
                'slug' => 'sand-1',
                'description' => 'the lake sand from lake victoria',
                'image' => 'products/August2020/c9tqpKjQhl89vfqzD0OU.png',
                'price' => 200000,
                'created_at' => '2020-08-14 23:30:00',
                'updated_at' => '2020-08-15 14:29:16',
            ),
            15 => 
            array (
                'id' => 66,
                'name' => 'river sand',
                'slug' => 'sand-2',
                'description' => 'river sand high quality',
                'image' => 'products/August2020/qnqi9yt7X4v5gnFcePiV.png',
                'price' => 200000,
                'created_at' => '2020-08-14 23:38:06',
                'updated_at' => '2020-08-14 23:38:06',
            ),
            16 => 
            array (
                'id' => 67,
                'name' => 'fire bricks',
                'slug' => 'brick-1',
                'description' => 'The firebricks',
                'image' => 'products/August2020/NaHtCLQreobAvDRAqNNd.png',
                'price' => 70000,
                'created_at' => '2020-08-14 23:44:30',
                'updated_at' => '2020-08-14 23:44:30',
            ),
            17 => 
            array (
                'id' => 68,
                'name' => 'concrete bricks',
                'slug' => 'bricks-2',
                'description' => 'Concrete Bricks',
                'image' => 'products/August2020/weP48yCziZKVy6ZoYfTl.png',
                'price' => 20000,
                'created_at' => '2020-08-15 07:45:40',
                'updated_at' => '2020-08-15 07:45:40',
            ),
            18 => 
            array (
                'id' => 69,
                'name' => 'stair edging',
                'slug' => 'stair-eding-1',
                'description' => 'stair edging',
                'image' => 'products/August2020/Da1z8KUx7Eu43FYHttfy.png',
                'price' => 200000,
                'created_at' => '2020-08-15 07:59:47',
                'updated_at' => '2020-08-15 07:59:47',
            ),
            19 => 
            array (
                'id' => 70,
                'name' => 'hima cement',
                'slug' => 'hima',
                'description' => 'hima cement',
                'image' => 'products/August2020/hSnmunFXGKTNoD0wZibS.png',
                'price' => 30000,
                'created_at' => '2020-08-15 08:03:17',
                'updated_at' => '2020-08-15 08:03:17',
            ),
            20 => 
            array (
                'id' => 71,
                'name' => 'tororo cement',
                'slug' => 'tororo-cement-2',
                'description' => 'toro',
                'image' => 'products/August2020/J60LzWJsrWn5Vxqr1QNn.png',
                'price' => 35000,
                'created_at' => '2020-08-15 09:12:00',
                'updated_at' => '2020-08-15 14:32:18',
            ),
            21 => 
            array (
                'id' => 72,
                'name' => 'Electric hand tool',
                'slug' => 'electric-hand-tool',
                'description' => 'electric-hand-tool',
                'image' => 'products/August2020/cXSnNadeXYtzVm8llAk2.png',
                'price' => 80000,
                'created_at' => '2020-08-15 09:19:42',
                'updated_at' => '2020-08-15 09:19:42',
            ),
            22 => 
            array (
                'id' => 73,
                'name' => 'corrugated iron sheets',
                'slug' => 'corrugated-sheets',
                'description' => 'corrugated iron sheets',
                'image' => 'products/August2020/alVlEU5Z1NpJte3VXlzG.png',
                'price' => 180000,
                'created_at' => '2020-08-15 09:21:59',
                'updated_at' => '2020-08-15 09:21:59',
            ),
            23 => 
            array (
                'id' => 74,
                'name' => 'Coated iron sheets',
                'slug' => 'coated-iron-sheets',
                'description' => 'Coated iron sheets',
                'image' => 'products/August2020/OH489zc2eCSvD7vmZo5D.png',
                'price' => 140000,
                'created_at' => '2020-08-15 09:25:00',
                'updated_at' => '2020-08-15 14:35:24',
            ),
            24 => 
            array (
                'id' => 75,
                'name' => 'interior door',
                'slug' => 'interior-door',
                'description' => 'interior door',
                'image' => 'products/August2020/a4YBEUHqE7YrbrFwZc4q.png',
                'price' => 200000,
                'created_at' => '2020-08-15 09:38:14',
                'updated_at' => '2020-08-15 09:38:14',
            ),
            25 => 
            array (
                'id' => 76,
                'name' => 'interior doors',
                'slug' => 'interior-doors-2',
                'description' => 'interior doors',
                'image' => 'products/August2020/9Ftnx6a1HjJ3lbR4cnyS.png',
                'price' => 200000,
                'created_at' => '2020-08-15 09:46:37',
                'updated_at' => '2020-08-15 09:46:37',
            ),
            26 => 
            array (
                'id' => 77,
                'name' => '2 bedrooms Nansana Town',
                'slug' => '2-bedrooms-3',
                'description' => '2 bedrooms Nansana Town',
                'image' => 'products/August2020/lCwELB0v0mQ6jX1A8aUb.png',
                'price' => 20000000,
                'created_at' => '2020-08-15 14:21:50',
                'updated_at' => '2020-08-15 14:21:50',
            ),
            27 => 
            array (
                'id' => 78,
                'name' => 'Gear speed',
                'slug' => 'gear-speed',
                'description' => 'Gear speed',
                'image' => 'products/August2020/NJy5yYoggX7JriTh2fEx.png',
                'price' => 200000,
                'created_at' => '2020-08-15 14:51:35',
                'updated_at' => '2020-08-15 14:51:35',
            ),
            28 => 
            array (
                'id' => 79,
                'name' => 'spray paint',
                'slug' => 'spray-paint',
                'description' => 'spray paint',
                'image' => 'products/August2020/g4fqKZN7rTp3v2EEEoRL.png',
                'price' => 40000,
                'created_at' => '2020-08-15 14:55:00',
                'updated_at' => '2020-08-15 14:58:16',
            ),
            29 => 
            array (
                'id' => 80,
                'name' => 'spray paint',
                'slug' => 'spray-paint',
                'description' => 'spray paint',
                'image' => 'products/August2020/Uno2XTfv2FpxBrm5djaW.png',
                'price' => 20000,
                'created_at' => '2020-08-15 15:01:06',
                'updated_at' => '2020-08-15 15:01:06',
            ),
        ));
        
        
    }
}