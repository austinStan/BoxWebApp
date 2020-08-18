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
                'images' => NULL,
                'price' => 50000000,
                'products_group' => 'top rated',
                'created_at' => '2020-08-13 16:16:00',
                'updated_at' => '2020-08-18 17:10:14',
            ),
            1 => 
            array (
                'id' => 52,
                'name' => '50X100 meters in Mbale District',
                'slug' => 'land-2',
                'description' => '50X100 meters in Mbale District',
                'image' => 'products/August2020/YgmkMVyd0lAxHbfdgRjg.png',
                'images' => NULL,
                'price' => 700000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-13 17:12:00',
                'updated_at' => '2020-08-17 23:41:47',
            ),
            2 => 
            array (
                'id' => 53,
                'name' => '2sqmiles in Buikwe District',
                'slug' => 'land-3',
                'description' => 'Letters of administration under process.each acres is sold at 7million',
                'image' => 'products/August2020/L2R3zdFK2wz08aUrjAM9.png',
                'images' => NULL,
                'price' => 700000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-14 11:13:00',
                'updated_at' => '2020-08-17 23:40:55',
            ),
            3 => 
            array (
                'id' => 54,
                'name' => '30 acres at Mabira',
                'slug' => 'land-4',
                'description' => 'Located at mabira kinoni village on block 308,plot16,Kinoni Village',
                'image' => 'products/August2020/v4TaTr81W7oxOlSfvrjm.png',
                'images' => NULL,
                'price' => 20000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-14 11:28:00',
                'updated_at' => '2020-08-17 23:39:58',
            ),
            4 => 
            array (
                'id' => 55,
                'name' => '170acres in mityana',
                'slug' => 'land-5',
                'description' => 'Located on block 483,plot34,Kasanda Bukuya Village',
                'image' => 'products/August2020/fLFuVa12OSJLvvYtsNa9.png',
                'images' => NULL,
                'price' => 3000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-14 11:39:00',
                'updated_at' => '2020-08-17 23:39:17',
            ),
            5 => 
            array (
                'id' => 56,
                'name' => '11 acres in Nsangi Village',
                'slug' => 'land-6',
                'description' => 'Further more located along the shores on block 552,plot 73 along katoosi rd.ngombele',
                'image' => 'products/August2020/MpPCb2mS2Q0mTffbsj48.png',
                'images' => NULL,
                'price' => 30000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-14 11:42:00',
                'updated_at' => '2020-08-17 23:38:12',
            ),
            6 => 
            array (
                'id' => 57,
                'name' => '20 acres at Nakisungu',
                'slug' => 'land-7',
                'description' => 'Located on block 259, plot 93,,Luseera Village',
                'image' => 'products/August2020/nCfQRtIkCorwallOI4rE.png',
                'images' => NULL,
                'price' => 40000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-14 11:46:00',
                'updated_at' => '2020-08-17 23:37:30',
            ),
            7 => 
            array (
                'id' => 58,
                'name' => '7 acres in Nakisungu',
                'slug' => 'land-8',
                'description' => 'located on block 259 ,plot 116 along katoosi road , Luseera Village',
                'image' => 'products/August2020/dAGOiVt3cAE7So3Vdd7H.png',
                'images' => NULL,
                'price' => 40000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-14 11:51:00',
                'updated_at' => '2020-08-17 23:36:48',
            ),
            8 => 
            array (
                'id' => 59,
                'name' => '50 acres in mukono',
                'slug' => 'land-9',
                'description' => 'Located at nagojja branch off on Namataba Jinja road',
                'image' => 'products/August2020/hH2sTHy1XjXyhf8OY5ma.png',
                'images' => NULL,
                'price' => 15000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-14 17:31:00',
                'updated_at' => '2020-08-17 23:36:03',
            ),
            9 => 
            array (
                'id' => 60,
                'name' => '318 acres  in Mukono',
                'slug' => 'land-10',
                'description' => 'Found on block 447,plots 66,67 .It touches the lake side in  katosi kijiko',
                'image' => 'products/August2020/yjQ9tZEg2i0BuFMmLxN1.png',
                'images' => NULL,
                'price' => 60000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-14 18:58:00',
                'updated_at' => '2020-08-17 23:35:11',
            ),
            10 => 
            array (
                'id' => 61,
                'name' => '200 acres in Mityana District',
                'slug' => 'land-11',
                'description' => 'Located along Mityana rd',
                'image' => 'products/August2020/GfcY6C6ruX5ikQ9X8KTi.png',
                'images' => NULL,
                'price' => 700000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-14 19:02:00',
                'updated_at' => '2020-08-17 23:34:33',
            ),
            11 => 
            array (
                'id' => 62,
                'name' => '250 acres  in Mubende District',
                'slug' => 'land-12',
                'description' => 'Located near nakayima hill.title to be got in 2-3 months',
                'image' => 'products/August2020/k6Q7iIbYq0WWp9GuacvP.png',
                'images' => NULL,
                'price' => 90000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-14 19:04:00',
                'updated_at' => '2020-08-17 23:34:08',
            ),
            12 => 
            array (
                'id' => 63,
                'name' => '2 bedrooms in Wakiso District',
                'slug' => '2-bedrooms-1',
                'description' => 'With a kitchen,garage and a swimming pool',
                'image' => 'products/August2020/AQz6dNouPLk04NH5PXZk.png',
                'images' => NULL,
                'price' => 30000000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 50000000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 200000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 200000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 70000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 20000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 200000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 30000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 35000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 80000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 180000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 140000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 200000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 200000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 20000000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 200000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 40000,
                'products_group' => 'best seller',
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
                'images' => NULL,
                'price' => 20000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 15:01:06',
                'updated_at' => '2020-08-15 15:01:06',
            ),
            30 => 
            array (
                'id' => 81,
                'name' => 'master lock',
                'slug' => 'master-lock',
                'description' => 'master lock',
                'image' => 'products/August2020/R3shXE1DaqDsZv7xNYZD.png',
                'images' => NULL,
                'price' => 50000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 15:13:40',
                'updated_at' => '2020-08-15 15:13:40',
            ),
            31 => 
            array (
                'id' => 82,
                'name' => 'pipes',
                'slug' => 'pipes-tubes',
                'description' => 'pipes',
                'image' => 'products/August2020/Y5Ll0tL8kUS9wZcmjdft.png',
                'images' => NULL,
                'price' => 80000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 15:15:40',
                'updated_at' => '2020-08-15 15:15:40',
            ),
            32 => 
            array (
                'id' => 83,
                'name' => 'seamless pipes',
                'slug' => 'seamless-pipes',
                'description' => 'seamless pipes',
                'image' => 'products/August2020/2xr0qOqsdMX8JCJxwjhp.png',
                'images' => NULL,
                'price' => 50000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 15:20:23',
                'updated_at' => '2020-08-15 15:20:23',
            ),
            33 => 
            array (
                'id' => 84,
                'name' => 'iron bars',
                'slug' => 'iron-bars',
                'description' => 'iron bars',
                'image' => 'products/August2020/gXfwehwayngrnZU8lVA9.png',
                'images' => NULL,
                'price' => 200000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 15:21:00',
                'updated_at' => '2020-08-15 15:23:50',
            ),
            34 => 
            array (
                'id' => 85,
                'name' => 'tubs',
                'slug' => 'tubs',
                'description' => 'Tubs',
                'image' => 'products/August2020/2LPPmuLCscccDBVM1WEE.png',
                'images' => NULL,
                'price' => 250000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 15:26:30',
                'updated_at' => '2020-08-15 15:26:30',
            ),
            35 => 
            array (
                'id' => 86,
                'name' => 'tub and toilet',
                'slug' => 'tub-toilet',
                'description' => 'tub and toilet',
                'image' => 'products/August2020/AOJ5KlBkTvFIsDUMpj1m.png',
                'images' => NULL,
                'price' => 290000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 15:29:23',
                'updated_at' => '2020-08-15 15:29:23',
            ),
            36 => 
            array (
                'id' => 87,
                'name' => 'washing machines',
                'slug' => 'washing-machines',
                'description' => 'washing machine is used for washing',
                'image' => 'products/August2020/PO3xdzI7fdZY8eTytW3p.png',
                'images' => NULL,
                'price' => 2000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 15:33:46',
                'updated_at' => '2020-08-15 15:33:46',
            ),
            37 => 
            array (
                'id' => 88,
                'name' => 'washing machines',
                'slug' => 'washing-machines-2',
                'description' => 'washing machine',
                'image' => 'products/August2020/BuY9cLLXQviClAjLHdvj.png',
                'images' => NULL,
                'price' => 1500000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 15:35:00',
                'updated_at' => '2020-08-15 15:35:29',
            ),
            38 => 
            array (
                'id' => 89,
                'name' => 'shule cable',
                'slug' => 'shule cable',
                'description' => 'shule cable',
                'image' => 'products/August2020/UG4iIAWQDy4jO7EqTvZC.png',
                'images' => NULL,
                'price' => 50000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 17:18:22',
                'updated_at' => '2020-08-15 17:18:22',
            ),
            39 => 
            array (
                'id' => 90,
                'name' => 'hdmi cable',
                'slug' => 'hdmi-cable',
                'description' => 'hdmi cable',
                'image' => 'products/August2020/gxWfuOIGqFVGqGckXsnP.png',
                'images' => NULL,
                'price' => 38000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 17:23:40',
                'updated_at' => '2020-08-15 17:23:40',
            ),
            40 => 
            array (
                'id' => 91,
                'name' => 'light bulb',
                'slug' => 'light-bulb',
                'description' => 'light bulb',
                'image' => 'products/August2020/w5MiBASDvEhj6Bz7lO7q.png',
                'images' => NULL,
                'price' => 30000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 17:29:41',
                'updated_at' => '2020-08-15 17:29:41',
            ),
            41 => 
            array (
                'id' => 92,
                'name' => 'switches',
                'slug' => 'switches',
                'description' => 'switches',
                'image' => 'products/August2020/I304iqwlf3YLLWWY68wS.png',
                'images' => NULL,
                'price' => 15000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 17:34:33',
                'updated_at' => '2020-08-15 17:34:33',
            ),
            42 => 
            array (
                'id' => 93,
                'name' => 'ankole cows',
                'slug' => 'ankole-cows',
                'description' => 'ankole cows',
                'image' => 'products/August2020/ikb1lYxrUpvyPcBgBkp4.png',
                'images' => NULL,
                'price' => 1800000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 17:39:59',
                'updated_at' => '2020-08-15 17:39:59',
            ),
            43 => 
            array (
                'id' => 94,
                'name' => 'fresian',
                'slug' => 'fresian',
                'description' => 'fresian',
                'image' => 'products/August2020/YbRLsuVsg9IqiS5U47qQ.png',
                'images' => NULL,
                'price' => 2500000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 17:45:26',
                'updated_at' => '2020-08-15 17:45:26',
            ),
            44 => 
            array (
                'id' => 95,
                'name' => 'kigezi goats',
                'slug' => 'kigezi-goats',
                'description' => 'kigezi goats',
                'image' => 'products/August2020/Kq22xBnU6YQIAWpe4PeE.png',
                'images' => NULL,
                'price' => 200000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 17:48:41',
                'updated_at' => '2020-08-15 17:48:41',
            ),
            45 => 
            array (
                'id' => 96,
                'name' => 'dina apartments',
                'slug' => 'dina-apartments',
                'description' => 'dina apartments',
                'image' => 'products/August2020/0HyarRcuhzUfNreVW1ZY.png',
                'images' => NULL,
                'price' => 240000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 19:51:03',
                'updated_at' => '2020-08-15 19:51:03',
            ),
            46 => 
            array (
                'id' => 97,
                'name' => 'selina apartments',
                'slug' => 'selina-apartments',
                'description' => 'selina apartments',
                'image' => 'products/August2020/qXCZAVaj1hHpsgANItsJ.png',
                'images' => NULL,
                'price' => 300000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 19:52:55',
                'updated_at' => '2020-08-15 19:52:55',
            ),
            47 => 
            array (
                'id' => 98,
                'name' => 'serena hotel',
                'slug' => 'serena-hotel',
                'description' => 'serena hotel',
                'image' => 'products/August2020/KAlKmloE9KXcjF1JZIiR.png',
                'images' => NULL,
                'price' => 1000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 19:54:16',
                'updated_at' => '2020-08-15 19:54:16',
            ),
            48 => 
            array (
                'id' => 99,
                'name' => 'harrier',
                'slug' => 'harrier',
                'description' => 'harrier',
                'image' => 'products/August2020/FTdy2SyxAZVIrUe0ZEQC.png',
                'images' => NULL,
                'price' => 3000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 20:00:57',
                'updated_at' => '2020-08-15 20:00:57',
            ),
            49 => 
            array (
                'id' => 100,
                'name' => 'toyota hilux',
                'slug' => 'toyota-hilux',
                'description' => 'toyota hilux',
                'image' => 'products/August2020/2AHSEGT40qtC8AqKGjEu.png',
                'images' => NULL,
                'price' => 70000000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 20:06:00',
                'updated_at' => '2020-08-15 20:07:28',
            ),
            50 => 
            array (
                'id' => 101,
                'name' => 'shirt',
                'slug' => 'shirt',
                'description' => 'shirt',
                'image' => 'products/August2020/xqHrzvuoaUTehRtaAzj8.png',
                'images' => NULL,
                'price' => 30000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 20:08:51',
                'updated_at' => '2020-08-15 20:08:51',
            ),
            51 => 
            array (
                'id' => 102,
                'name' => 'shirt',
                'slug' => 'shirt',
                'description' => 'shirt',
                'image' => 'products/August2020/dZcssygfUiTPUiNL5zUh.png',
                'images' => NULL,
                'price' => 50000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 20:10:16',
                'updated_at' => '2020-08-15 20:10:16',
            ),
            52 => 
            array (
                'id' => 103,
                'name' => 'shoes',
                'slug' => 'shoes',
                'description' => 'shoes',
                'image' => 'products/August2020/2E5Ds19KQsHU6jLzI86H.png',
                'images' => NULL,
                'price' => 50000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 20:11:42',
                'updated_at' => '2020-08-15 20:11:42',
            ),
            53 => 
            array (
                'id' => 104,
                'name' => 'mangoes',
                'slug' => 'mangoes',
                'description' => 'mangoes',
                'image' => 'products/August2020/ExQDuWUBY0wsduXoMBB0.png',
                'images' => NULL,
                'price' => 2000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 20:18:52',
                'updated_at' => '2020-08-15 20:18:52',
            ),
            54 => 
            array (
                'id' => 105,
                'name' => 'kakira sugar',
                'slug' => 'kakira-sugar',
                'description' => 'kakira sugar',
                'image' => 'products/August2020/9flNCyWuwkqO27Fl6wxd.png',
                'images' => NULL,
                'price' => 8000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-15 20:45:30',
                'updated_at' => '2020-08-15 20:45:30',
            ),
            55 => 
            array (
                'id' => 106,
                'name' => 'plascon',
                'slug' => 'plascon',
                'description' => 'plascon',
                'image' => 'products/August2020/f2J3WM5AdLWGlqpDt1zL.png',
                'images' => NULL,
                'price' => 20000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-16 05:22:00',
                'updated_at' => '2020-08-16 05:23:20',
            ),
            56 => 
            array (
                'id' => 107,
                'name' => 'emulsion paint',
                'slug' => 'emulsion-paint',
                'description' => 'emulsion paint',
                'image' => 'products/August2020/82YAO4AhZASLzq3u2PBk.png',
                'images' => NULL,
                'price' => 50000,
                'products_group' => 'best seller',
                'created_at' => '2020-08-16 05:31:00',
                'updated_at' => '2020-08-16 05:44:40',
            ),
            57 => 
            array (
                'id' => 108,
                'name' => 'wall guard paint',
                'slug' => 'wall-guard-paint',
                'description' => 'wall guard paint',
                'image' => 'products/August2020/8sxURA6dordeAj2W2Wra.png',
                'images' => NULL,
                'price' => 50000,
                'products_group' => 'top rated',
                'created_at' => '2020-08-16 05:38:00',
                'updated_at' => '2020-08-18 17:12:15',
            ),
            58 => 
            array (
                'id' => 109,
                'name' => 'Aluminium Window',
                'slug' => 'alumium-window',
                'description' => 'Aluminium Window',
                'image' => 'products/August2020/zoGvCd5wfMdFR4CmSTz5.png',
                'images' => '["products\\/August2020\\/ICiUrDNjhDhRAKGohzVw.jpeg","products\\/August2020\\/ZJxYyShKDugkRCCor4Ji.png","products\\/August2020\\/QBbohHpvFQ1A28rFDgCg.png","products\\/August2020\\/8qD3BOSW5IcWqcTW6qEj.jpg","products\\/August2020\\/P6o1GJv4CrqoOux7qlmq.png"]',
                'price' => 200000,
                'products_group' => 'top rated',
                'created_at' => '2020-08-17 23:17:00',
                'updated_at' => '2020-08-18 17:08:41',
            ),
        ));
        
        
    }
}