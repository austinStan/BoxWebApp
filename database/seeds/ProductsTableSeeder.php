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
                'name' => '12 decimals sonde view estates',
                'slug' => '12-decimals-sonde-view-estates',
                'description' => 'Located in Namugongo.For more details call 0751436192',
                'image' => 'products/August2020/Qx4okvfu7FEZ8Lcbs0cW.png',
                'images' => '["products\\/August2020\\/KLU8Oung0zmqi6djO2f4.png"]',
                'price' => '65M',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'hot offer',
                'created_at' => '2020-08-21 13:46:00',
                'updated_at' => '2020-08-25 17:44:41',
            ),
            1 => 
            array (
                'id' => 52,
                'name' => '7 bedrooms in kiwatule dwelling',
                'slug' => '7-bedrooms-in-kiwatule-dwelling',
                'description' => 'Its on 30 decimals acreage',
                'image' => 'products/August2020/IZjvusvwg5IXVZRLkGVL.png',
                'images' => '["products\\/August2020\\/W6X59h9KtkjCBTzh18C4.png"]',
                'price' => '1.1billion',
                'old_price' => NULL,
                'main_category' => 'Houses',
                'types' => 'best deal',
                'created_at' => '2020-08-21 14:20:00',
                'updated_at' => '2020-08-25 18:00:59',
            ),
            2 => 
            array (
                'id' => 53,
                'name' => '30 acres at Mabira Kinoni Village',
                'slug' => '30-acres-at-mabira-kinoni-village',
                'description' => 'its located on block 308,plot 16.Property under Edward property developers Ltd.Location office Mukono.Phone number is 0777410410',
                'image' => 'products/August2020/ckvSVan8pqT8HlX6gOFd.png',
                'images' => '["products\\/August2020\\/eRqbcfDjNML3Sx3y5z1j.png","products\\/August2020\\/xivbGFzAwl1EKchvduP8.png"]',
                'price' => '20m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'top seller',
                'created_at' => '2020-08-21 14:30:00',
                'updated_at' => '2020-08-25 17:45:49',
            ),
            3 => 
            array (
                'id' => 54,
                'name' => '170 acres at Kasanda Bukuya',
                'slug' => '170-acres-at-kasanda-bukuya',
                'description' => 'Located on block 483,plot 34',
                'image' => 'products/August2020/pbkqdPQ4ynAkn4w0eDUp.png',
                'images' => '["products\\/August2020\\/gQ55zgOkDpwX12RL1QSQ.png"]',
                'price' => '3m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'top seller',
                'created_at' => '2020-08-21 14:34:00',
                'updated_at' => '2020-08-25 17:47:54',
            ),
            4 => 
            array (
                'id' => 55,
                'name' => '11 acres at ngombele Nsangi',
                'slug' => '11-acres-at-ngombele-nsangi',
                'description' => 'Located along the shores on block 552,plot 73 katosi rd',
                'image' => 'products/August2020/n1d6eZes7janZdZWJ37f.png',
                'images' => '["products\\/August2020\\/5UnuU9vg4SA21KlmatdP.png"]',
                'price' => '30m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'featured',
                'created_at' => '2020-08-21 14:37:00',
                'updated_at' => '2020-08-25 17:48:18',
            ),
            5 => 
            array (
                'id' => 56,
                'name' => '20 acres at Nakisungu',
                'slug' => '20-acres-at-nakisungu',
                'description' => 'Located on block 259,plot 93',
                'image' => 'products/August2020/qOHAnBCYxLAcgV21Qwe5.png',
                'images' => '["products\\/August2020\\/tCvdDiYNt73FEaAIEiKQ.png"]',
                'price' => '40m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'top rated',
                'created_at' => '2020-08-21 14:41:00',
                'updated_at' => '2020-08-25 17:49:04',
            ),
            6 => 
            array (
                'id' => 57,
                'name' => '200 acres in Mityana District',
                'slug' => '200-acres-in-mityana-district',
                'description' => 'Title under process within 2-3 months',
                'image' => 'products/August2020/bF9j6UKb5uCdxyn0smHV.png',
                'images' => '["products\\/August2020\\/Y2LNwiqPLMxfmJcO8EMR.png"]',
                'price' => '20m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'featured',
                'created_at' => '2020-08-21 14:46:00',
                'updated_at' => '2020-08-25 17:48:43',
            ),
            7 => 
            array (
                'id' => 58,
                'name' => '250 acres at Mubende District',
                'slug' => '250-acres-at-mubende-district',
                'description' => 'further location near nakayima hill.Title under process in 2-3 months',
                'image' => 'products/August2020/V8uHw8tF4t1cR8fPz1zK.png',
                'images' => '["products\\/August2020\\/msPQfEW3876oeuE871yG.png"]',
                'price' => '24m',
                'old_price' => '30m',
                'main_category' => 'Land',
                'types' => 'featured',
                'created_at' => '2020-08-21 14:49:00',
                'updated_at' => '2020-08-25 19:31:15',
            ),
            8 => 
            array (
                'id' => 59,
                'name' => '50 acres at Namataba branch off',
                'slug' => '50-acres-at-namataba-branch-off',
                'description' => 'Located along Jinja road on block 132,plot 2',
                'image' => 'products/August2020/iLjaKN5rf20zHSNK8q2W.png',
                'images' => '["products\\/August2020\\/WjN1rKGvtr7nzTak39UZ.png"]',
                'price' => '15m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'featured',
                'created_at' => '2020-08-22 10:52:00',
                'updated_at' => '2020-08-25 17:46:52',
            ),
            9 => 
            array (
                'id' => 60,
                'name' => '318 acres katosi kijiko in Mukono',
                'slug' => '318-acres-katosi-kijiko-in-mukono',
                'description' => 'Further location on block 447 plot 66,67.It touches the lake.Title in one month will be available',
                'image' => 'products/August2020/n211lQ9IlmRkJzlqwZC1.png',
                'images' => '["products\\/August2020\\/iLZbww902mlO7SElQZnG.png"]',
                'price' => '55m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'featured',
                'created_at' => '2020-08-22 10:55:00',
                'updated_at' => '2020-08-25 17:46:34',
            ),
            10 => 
            array (
                'id' => 61,
                'name' => 'one bedroom in kyanjja',
                'slug' => 'one-bedroom-in-kyanjja',
                'description' => 'Sits on 15 decimals',
                'image' => 'products/August2020/Es77GyDIC936y3hM8lkE.png',
                'images' => '["products\\/August2020\\/jIwCcvPLN4iRnBpjkto6.png"]',
                'price' => '1.2Bn',
                'old_price' => NULL,
                'main_category' => 'Houses',
                'types' => 'hot offer',
                'created_at' => '2020-08-22 12:05:00',
                'updated_at' => '2020-08-25 18:01:50',
            ),
            11 => 
            array (
                'id' => 62,
                'name' => '3 bedrooms along nsasa kira',
                'slug' => '3-bedrooms-along-nsasa-kira',
                'description' => 'Its on 12 decimals ,with a boysquater',
                'image' => 'products/August2020/IzhnnpmvjlmtOdFfV4Id.png',
                'images' => '["products\\/August2020\\/ynz5iB4Xh1romZSh6IPi.png"]',
                'price' => '300m',
                'old_price' => NULL,
                'main_category' => 'Houses',
                'types' => 'top seller',
                'created_at' => '2020-08-22 18:05:00',
                'updated_at' => '2020-08-25 18:01:36',
            ),
            12 => 
            array (
                'id' => 65,
                'name' => '2 bedrooms in kyanja',
                'slug' => '2-bedrooms-in-kyanja',
                'description' => 'they are 3 houses in total available for rent',
                'image' => 'products/August2020/jKyQ4mCLyXbWMv9kK72J.png',
                'images' => '["products\\/August2020\\/wthjGc1fySXqhyIeb0GS.png"]',
                'price' => '320m',
                'old_price' => NULL,
                'main_category' => 'Houses',
                'types' => 'featured',
                'created_at' => '2020-08-22 18:14:00',
                'updated_at' => '2020-08-25 18:01:24',
            ),
            13 => 
            array (
                'id' => 66,
                'name' => '16 unit apartment on sale',
                'slug' => '16-unit-apartment-on-sale',
                'description' => 'located in kyaliwajala kira on 14 decimals',
                'image' => 'products/August2020/J0LQG0yUpe61esPjpy4P.png',
                'images' => '["products\\/August2020\\/YDZ6Aes9nsROfiTb9Dsr.png"]',
                'price' => '960m',
                'old_price' => NULL,
                'main_category' => 'Apartments',
                'types' => 'featured',
                'created_at' => '2020-08-22 18:30:00',
                'updated_at' => '2020-08-25 18:07:02',
            ),
            14 => 
            array (
                'id' => 67,
                'name' => '12 unit apartments on sale',
                'slug' => '12-unit-apartments-on-sale',
                'description' => 'Located in kyaliwajala kira on 14 decimals',
                'image' => 'products/August2020/mnWRyz6Epko3zaSuGGZb.png',
                'images' => NULL,
                'price' => '800m',
                'old_price' => NULL,
                'main_category' => 'Apartments',
                'types' => 'featured',
                'created_at' => '2020-08-22 19:07:00',
                'updated_at' => '2020-08-25 18:07:23',
            ),
            15 => 
            array (
                'id' => 68,
                'name' => '1 plot for sale in kira mulawa',
                'slug' => '1-plot-for-sale-in-kira-mulawa',
                'description' => 'On 26 decimals near the main road',
                'image' => 'products/August2020/iBhN32mx99PPwY9eQEkW.png',
                'images' => NULL,
                'price' => '320m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'featured',
                'created_at' => '2020-08-22 19:10:00',
                'updated_at' => '2020-08-25 17:41:49',
            ),
            16 => 
            array (
                'id' => 69,
                'name' => '1 plot in nsasa',
                'slug' => '1-plot-in-nsasa',
                'description' => 'it is found on 25 decimals',
                'image' => 'products/August2020/9Fqw4agENEEaAz84pFcZ.png',
                'images' => '["products\\/August2020\\/TnNJd6PxiHmHPwJRd3gT.png","products\\/August2020\\/KjIvnzwav5cOZqPOj595.png","products\\/August2020\\/ygc1xWt20rSrllJT5Ob1.png","products\\/August2020\\/N418KOsOfp1zHBwSpcJJ.png"]',
                'price' => '120m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'featured',
                'created_at' => '2020-08-22 19:12:00',
                'updated_at' => '2020-08-25 17:41:32',
            ),
            17 => 
            array (
                'id' => 70,
                'name' => '1 plot in nsasa on 12 decimals',
                'slug' => '1-plot-in-nsasa-on-12-decimals',
                'description' => 'Contact number is 0702687869',
                'image' => 'products/August2020/K0U5rIu6SyPjzyiAvcP4.png',
                'images' => NULL,
                'price' => '50m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'featured',
                'created_at' => '2020-08-22 19:17:00',
                'updated_at' => '2020-08-25 17:34:45',
            ),
            18 => 
            array (
                'id' => 71,
                'name' => '50x100 metres in Wakiso District',
                'slug' => '50x100-metres-in-wakiso-district',
                'description' => 'Located in Namusera Mamombwe Wakiso District',
                'image' => 'products/August2020/old1uFAtjyG2K81dyG8r.png',
                'images' => '["products\\/August2020\\/VT0oj8VfaBkuXi7UBD8I.png","products\\/August2020\\/kWWsJTrMBMWBf4f5bUcp.png"]',
                'price' => '16m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'top seller',
                'created_at' => '2020-08-26 10:31:00',
                'updated_at' => '2020-08-26 10:41:55',
            ),
            19 => 
            array (
                'id' => 72,
                'name' => '50x100 meters in Wakiso District',
                'slug' => '50x100-meters-in-wakiso-district',
                'description' => 'Located in Namusera Mamombwe Wakiso District',
                'image' => 'products/August2020/SqKOOX5C4cZkYZgpmbV6.png',
                'images' => '["products\\/August2020\\/uL2dirqplV83PAlEiXy3.png"]',
                'price' => '13m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'hot offer',
                'created_at' => '2020-08-26 10:40:00',
                'updated_at' => '2020-08-26 10:41:25',
            ),
            20 => 
            array (
                'id' => 73,
                'name' => '9 unit apartment in Kyaliwajala',
                'slug' => '9-unit-apartment-in-kyaliwajala',
                'description' => 'Its Located on kiira road',
                'image' => 'products/August2020/lRYLTntNdmghZPB5XimN.png',
                'images' => '["products\\/August2020\\/MelPjb5n8jzMlaQXwUlz.png"]',
                'price' => '650m',
                'old_price' => NULL,
                'main_category' => 'Apartments',
                'types' => 'featured',
                'created_at' => '2020-08-26 10:56:00',
                'updated_at' => '2020-08-26 10:56:19',
            ),
            21 => 
            array (
                'id' => 74,
                'name' => '5 bedrooms namagoma nsangi',
                'slug' => '5-bedrooms-namagoma-nsangi',
                'description' => '-With Dinining
-Sitting room and kitchen
-Located at namagoma nsangi just 1km from tarmac masaka road
-Its on a hill with a clear city view.
Contact Us on 0701446719
-',
                'image' => 'products/August2020/f48gPjvqcFo19TV0cpHK.png',
                'images' => '["products\\/August2020\\/MHCOuNwI134qgZHZ3vbc.png","products\\/August2020\\/VuCm5Pp4KMDUenrS7sxm.png"]',
                'price' => '80m',
                'old_price' => NULL,
                'main_category' => 'Houses',
                'types' => 'featured',
                'created_at' => '2020-08-26 11:11:00',
                'updated_at' => '2020-08-26 11:13:26',
            ),
            22 => 
            array (
                'id' => 75,
                'name' => '50x100fts in kikandwe kakira',
                'slug' => '50x100fts-in-kikandwe-kakira',
                'description' => 'Located 300 meters away from the tarmac.Its a brand new estate with a highly developing neighbourhood with power and water on the site.Private Mailo title also available
-',
                'image' => 'products/August2020/kFZTb3gEatM2Tpsskaxb.png',
                'images' => '["products\\/August2020\\/UwsjUIE5NjWyDLA6JwMF.png","products\\/August2020\\/EyRMnN4i2lq7th8EdrR9.png","products\\/August2020\\/6pdxHo7BNs1bKQLE64bC.png"]',
                'price' => '15m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'featured',
                'created_at' => '2020-08-26 11:23:56',
                'updated_at' => '2020-08-26 11:23:56',
            ),
            23 => 
            array (
                'id' => 76,
                'name' => '50x100 ft in buloba',
                'slug' => '50x100-ft-in-buloba',
                'description' => 'Located 800 metres from the tarmac
Its a new estate with power and water on the site
-private milo land title also available
-flat leveled hill with no grading required.
-over 80 plots still available',
                'image' => 'products/August2020/4Ys8GUdy8HLbKJlTK6x1.png',
                'images' => '["products\\/August2020\\/5fTP6qfF7ZgcPonXz1Dn.png","products\\/August2020\\/SQiHrvFWACZCkAycHbo2.png","products\\/August2020\\/qXxWUJ9YF2rFtNL7F1Ua.png"]',
                'price' => '38m',
                'old_price' => NULL,
                'main_category' => 'Land',
                'types' => 'best deal',
                'created_at' => '2020-08-26 11:33:00',
                'updated_at' => '2020-08-26 11:34:27',
            ),
            24 => 
            array (
                'id' => 77,
                'name' => '7 bedrooms in namugongo sonde',
                'slug' => '7-bedrooms-in-namugongo-sonde',
                'description' => '5 bathrooms,boys quarter.
Seated on 25 decimals
Location just 100 meters off the main road',
                'image' => 'products/August2020/Z3GSdp95uHZFOdUqimcS.png',
                'images' => '["products\\/August2020\\/MHTVXSQZVam3LxpWgRHw.png","products\\/August2020\\/jnvzDvP1Dr8aEsL1kRQs.png","products\\/August2020\\/cJmbGcIMln2zeYZT475w.png","products\\/August2020\\/5Q2uhtHdGxPW94foshJn.png"]',
                'price' => '700m',
                'old_price' => NULL,
                'main_category' => 'Houses',
                'types' => 'best deal',
                'created_at' => '2020-08-26 11:41:00',
                'updated_at' => '2020-08-26 11:43:47',
            ),
            25 => 
            array (
                'id' => 78,
                'name' => '8 self contained rentals in Kisaasi kampala',
                'slug' => '8-self-contained-rentals-in-kisaasi-kampala',
                'description' => 'With ready land title
along kampala kisaasi tarmac road',
                'image' => 'products/August2020/BYk9tajcpelBZfpq1VX9.png',
                'images' => '["products\\/August2020\\/SD2BJGAwowovjs9pYR0P.png","products\\/August2020\\/9EfBmi2TVHyj2kRAsqox.png","products\\/August2020\\/r9AbKAw2SM5uIBLJyQJ6.png","products\\/August2020\\/45cN43QNQvCUoMTOrKJf.png"]',
                'price' => '450m',
                'old_price' => NULL,
                'main_category' => 'Houses',
                'types' => 'featured',
                'created_at' => '2020-08-26 11:53:58',
                'updated_at' => '2020-08-26 11:53:58',
            ),
            26 => 
            array (
                'id' => 79,
                'name' => 'HDMI cable',
                'slug' => 'hdmi-cable',
                'description' => '4m long
brown',
                'image' => 'products/August2020/3kE5qM2Qw5q6mFWNwp2e.png',
                'images' => '["products\\/August2020\\/fZNQb7MQNC5emT749Oy8.png"]',
                'price' => '15,000',
                'old_price' => '20,000',
                'main_category' => NULL,
                'types' => 'top seller',
                'created_at' => '2020-08-26 14:26:53',
                'updated_at' => '2020-08-26 14:26:53',
            ),
            27 => 
            array (
                'id' => 80,
                'name' => 'interior door',
                'slug' => 'interior-door',
                'description' => 'interior door',
                'image' => 'products/August2020/wO5fUbkewlNa4r6mF3eo.png',
                'images' => '["products\\/August2020\\/MQ0PNY4Y8HodzXOsYYTo.png"]',
                'price' => '70,000',
                'old_price' => NULL,
                'main_category' => NULL,
                'types' => 'featured',
                'created_at' => '2020-08-27 11:49:30',
                'updated_at' => '2020-08-27 11:49:30',
            ),
        ));
        
        
    }
}