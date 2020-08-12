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
                'id' => 1,
                'name' => 'velit',
                'brand' => 'rerum',
                'slug' => 'eligendi-nihil-vel-velit-accusantium-fugiat-quia',
                'location' => 'Hawaii',
                'description' => 'Minima eum itaque molestiae animi ullam ad vero consequatur hic rerum debitis.',
                'image' => 'images/img.png',
                'size' => '7',
                'quantity' => 6,
                'weight' => 6,
                'dimensions' => 2,
                'price' => 991,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'quod',
                'brand' => 'blanditiis',
                'slug' => 'repudiandae-et-soluta-cumque-magnam-fugit',
                'location' => 'Arizona',
                'description' => 'Non laudantium accusamus ut reprehenderit aliquam nihil officiis fugit sed rem fuga reiciendis.',
                'image' => 'images/img.png',
                'size' => '9',
                'quantity' => 0,
                'weight' => 7,
                'dimensions' => 5,
                'price' => 1245,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'cumque',
                'brand' => 'eaque',
                'slug' => 'eos-reprehenderit-cum-similique-praesentium-officiis-quo-quia-vel',
                'location' => 'Colorado',
                'description' => 'Nihil numquam error soluta doloribus nam cumque neque nostrum harum atque repudiandae.',
                'image' => 'images/img.png',
                'size' => '3',
                'quantity' => 3,
                'weight' => 9,
                'dimensions' => 6,
                'price' => 1489,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'autem',
                'brand' => 'illum',
                'slug' => 'optio-itaque-labore-soluta-esse-et-impedit-velit',
                'location' => 'Kentucky',
                'description' => 'Accusamus sit pariatur dolores porro perferendis hic nostrum molestiae voluptas.',
                'image' => 'images/img.png',
                'size' => '3',
                'quantity' => 0,
                'weight' => 1,
                'dimensions' => 9,
                'price' => 553,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'optio',
                'brand' => 'impedit',
                'slug' => 'amet-qui-voluptatum-cupiditate-nesciunt-labore-consequatur-ut',
                'location' => 'Alabama',
                'description' => 'Tenetur explicabo quia exercitationem deserunt adipisci velit eum esse ipsa est unde.',
                'image' => 'images/img.png',
                'size' => '6',
                'quantity' => 2,
                'weight' => 2,
                'dimensions' => 2,
                'price' => 1488,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'nihil',
                'brand' => 'delectus',
                'slug' => 'molestiae-et-officia-at-fuga-consequatur-vel',
                'location' => 'New Hampshire',
                'description' => 'Saepe molestias vel vel voluptatem quas quidem in et ex.',
                'image' => 'images/img.png',
                'size' => '4',
                'quantity' => 7,
                'weight' => 7,
                'dimensions' => 8,
                'price' => 934,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'dolor',
                'brand' => 'pariatur',
                'slug' => 'nemo-qui-laudantium-eum-qui-repellendus-quo-labore',
                'location' => 'Massachusetts',
                'description' => 'Rem quod qui et libero dignissimos nihil ipsum.',
                'image' => 'images/img.png',
                'size' => '5',
                'quantity' => 5,
                'weight' => 8,
                'dimensions' => 8,
                'price' => 1717,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'quibusdam',
                'brand' => 'eveniet',
                'slug' => 'aut-laudantium-eos-ut-voluptates-vero-eligendi',
                'location' => 'Idaho',
                'description' => 'Consequatur iure et saepe a ea modi consequatur perferendis voluptatem vero perspiciatis dolor.',
                'image' => 'images/img.png',
                'size' => '1',
                'quantity' => 0,
                'weight' => 7,
                'dimensions' => 1,
                'price' => 1306,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'iste',
                'brand' => 'velit',
                'slug' => 'placeat-voluptate-autem-totam-culpa-ea-numquam-adipisci-est',
                'location' => 'Arkansas',
                'description' => 'Qui nobis eaque voluptas quo occaecati qui ipsa officiis animi voluptatem sed nulla.',
                'image' => 'images/img.png',
                'size' => '7',
                'quantity' => 3,
                'weight' => 1,
                'dimensions' => 0,
                'price' => 1320,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'modi',
                'brand' => 'mollitia',
                'slug' => 'iusto-explicabo-quia-quam-dolores-perspiciatis',
                'location' => 'Washington',
                'description' => 'Molestiae ut aut placeat non sint nulla odio eos minima ut.',
                'image' => 'images/img.png',
                'size' => '3',
                'quantity' => 7,
                'weight' => 9,
                'dimensions' => 4,
                'price' => 1465,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'labore',
                'brand' => 'quasi',
                'slug' => 'perspiciatis-fugit-sed-ut',
                'location' => 'Indiana',
                'description' => 'Nihil quia quia ea aut ea unde culpa quidem et sit iste eius.',
                'image' => 'images/img.png',
                'size' => '1',
                'quantity' => 0,
                'weight' => 5,
                'dimensions' => 4,
                'price' => 431,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ea',
                'brand' => 'sit',
                'slug' => 'deserunt-facere-est-officiis',
                'location' => 'Nebraska',
                'description' => 'Rem et quia occaecati aut quia est.',
                'image' => 'images/img.png',
                'size' => '8',
                'quantity' => 5,
                'weight' => 6,
                'dimensions' => 7,
                'price' => 1346,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'voluptas',
                'brand' => 'ab',
                'slug' => 'in-impedit-voluptas-ut-occaecati-in',
                'location' => 'Nevada',
                'description' => 'Enim ut delectus perspiciatis a doloremque sint esse dicta eum.',
                'image' => 'images/img.png',
                'size' => '3',
                'quantity' => 7,
                'weight' => 5,
                'dimensions' => 4,
                'price' => 615,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'et',
                'brand' => 'officia',
                'slug' => 'magnam-a-vel-hic-exercitationem-minus-quo',
                'location' => 'Arizona',
                'description' => 'Quis laborum accusamus voluptates qui voluptas ipsam labore labore sed dolores.',
                'image' => 'images/img.png',
                'size' => '4',
                'quantity' => 5,
                'weight' => 4,
                'dimensions' => 2,
                'price' => 1183,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'enim',
                'brand' => 'quibusdam',
                'slug' => 'et-recusandae-qui-quisquam-aut',
                'location' => 'New York',
                'description' => 'Ipsum esse adipisci rerum fuga maxime vel rerum quibusdam aut.',
                'image' => 'images/img.png',
                'size' => '8',
                'quantity' => 4,
                'weight' => 4,
                'dimensions' => 9,
                'price' => 1390,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'consequuntur',
                'brand' => 'est',
                'slug' => 'at-a-veniam-voluptates',
                'location' => 'District of Columbia',
                'description' => 'Sed earum fuga quibusdam in quia veniam id dolore consequatur sint dolore quam rerum.',
                'image' => 'images/img.png',
                'size' => '0',
                'quantity' => 8,
                'weight' => 6,
                'dimensions' => 8,
                'price' => 493,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'at',
                'brand' => 'et',
                'slug' => 'placeat-illo-quas-nulla-alias-sunt-ut-cumque',
                'location' => 'California',
                'description' => 'Qui vitae ad cupiditate quisquam sit aut sint in rerum.',
                'image' => 'images/img.png',
                'size' => '3',
                'quantity' => 6,
                'weight' => 0,
                'dimensions' => 8,
                'price' => 1189,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'molestiae',
                'brand' => 'et',
                'slug' => 'vel-ullam-aperiam-quis-blanditiis-magni-dolores-sit',
                'location' => 'West Virginia',
                'description' => 'Magni explicabo aperiam eaque molestiae nihil nisi.',
                'image' => 'images/img.png',
                'size' => '6',
                'quantity' => 2,
                'weight' => 2,
                'dimensions' => 5,
                'price' => 1171,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'ut',
                'brand' => 'qui',
                'slug' => 'aut-sint-corporis-ab-nobis-sit',
                'location' => 'Indiana',
                'description' => 'Aliquid sunt quam consequatur ipsum consequatur sequi omnis nemo dolor et tenetur placeat.',
                'image' => 'images/img.png',
                'size' => '8',
                'quantity' => 1,
                'weight' => 0,
                'dimensions' => 9,
                'price' => 571,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'cum',
                'brand' => 'sit',
                'slug' => 'est-aliquid-voluptas-voluptatem-incidunt-aut-tempora',
                'location' => 'New Jersey',
                'description' => 'Qui et a assumenda cupiditate occaecati reprehenderit et possimus.',
                'image' => 'images/img.png',
                'size' => '0',
                'quantity' => 4,
                'weight' => 0,
                'dimensions' => 8,
                'price' => 1929,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'veritatis',
                'brand' => 'est',
                'slug' => 'repellat-accusamus-rem-tenetur-vitae',
                'location' => 'North Dakota',
                'description' => 'Dolor voluptatibus eaque et et est quos mollitia voluptas eos impedit.',
                'image' => 'images/img.png',
                'size' => '8',
                'quantity' => 3,
                'weight' => 7,
                'dimensions' => 9,
                'price' => 407,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'ut',
                'brand' => 'aut',
                'slug' => 'illo-voluptas-assumenda-veritatis-est-molestiae-laboriosam-aperiam',
                'location' => 'Wyoming',
                'description' => 'Tempora et rerum sunt et enim magnam corrupti.',
                'image' => 'images/img.png',
                'size' => '8',
                'quantity' => 5,
                'weight' => 1,
                'dimensions' => 1,
                'price' => 1046,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'sit',
                'brand' => 'corrupti',
                'slug' => 'nostrum-qui-at-voluptatum-quod-et-quos',
                'location' => 'South Carolina',
                'description' => 'Dolore qui expedita quas impedit rerum earum et voluptatem maxime ab ea.',
                'image' => 'images/img.png',
                'size' => '3',
                'quantity' => 4,
                'weight' => 5,
                'dimensions' => 8,
                'price' => 1424,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'sunt',
                'brand' => 'error',
                'slug' => 'doloremque-occaecati-neque-dicta-eos-assumenda-aut-quas',
                'location' => 'Texas',
                'description' => 'Est consequuntur suscipit in aut at excepturi molestiae et voluptas voluptas repellat.',
                'image' => 'images/img.png',
                'size' => '0',
                'quantity' => 1,
                'weight' => 7,
                'dimensions' => 2,
                'price' => 1613,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'quia',
                'brand' => 'quo',
                'slug' => 'suscipit-eos-tempore-minima-ullam-ducimus',
                'location' => 'Utah',
                'description' => 'Nisi ut doloremque laborum et voluptas ipsam est qui ut.',
                'image' => 'images/img.png',
                'size' => '8',
                'quantity' => 4,
                'weight' => 9,
                'dimensions' => 4,
                'price' => 1167,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'qui',
                'brand' => 'vitae',
                'slug' => 'voluptatem-asperiores-cum-aut-praesentium-inventore-molestias-quod',
                'location' => 'Iowa',
                'description' => 'Deleniti ad totam labore atque doloribus ut rem accusantium suscipit voluptatem et reiciendis beatae.',
                'image' => 'images/img.png',
                'size' => '5',
                'quantity' => 4,
                'weight' => 8,
                'dimensions' => 5,
                'price' => 1150,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'ab',
                'brand' => 'voluptas',
                'slug' => 'molestias-perferendis-tenetur-dolor-corrupti',
                'location' => 'Ohio',
                'description' => 'Laborum repellendus sint ut in harum sequi dolor voluptate aliquid.',
                'image' => 'images/img.png',
                'size' => '5',
                'quantity' => 3,
                'weight' => 9,
                'dimensions' => 0,
                'price' => 866,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'quia',
                'brand' => 'saepe',
                'slug' => 'voluptatem-esse-rerum-maxime-doloremque-temporibus',
                'location' => 'South Dakota',
                'description' => 'Voluptas quasi fuga eos vero labore sequi sit consequatur et.',
                'image' => 'images/img.png',
                'size' => '3',
                'quantity' => 1,
                'weight' => 3,
                'dimensions' => 5,
                'price' => 1520,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'aut',
                'brand' => 'aut',
                'slug' => 'omnis-laboriosam-vero-fugit-dolor-voluptate-nesciunt',
                'location' => 'New York',
                'description' => 'Tempora optio ut rem repellat nemo iusto.',
                'image' => 'images/img.png',
                'size' => '0',
                'quantity' => 0,
                'weight' => 2,
                'dimensions' => 9,
                'price' => 1678,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'ab',
                'brand' => 'et',
                'slug' => 'non-neque-ut-alias-ex-id',
                'location' => 'Rhode Island',
                'description' => 'Voluptas voluptas rerum temporibus aut similique quasi.',
                'image' => 'images/img.png',
                'size' => '6',
                'quantity' => 6,
                'weight' => 7,
                'dimensions' => 4,
                'price' => 591,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'porro',
                'brand' => 'sed',
                'slug' => 'occaecati-deleniti-omnis-id-voluptates-adipisci',
                'location' => 'Utah',
                'description' => 'Qui sint quia itaque sunt suscipit ut natus sit dolorum dolorem assumenda.',
                'image' => 'images/img.png',
                'size' => '2',
                'quantity' => 8,
                'weight' => 1,
                'dimensions' => 5,
                'price' => 457,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'modi',
                'brand' => 'dolor',
                'slug' => 'id-similique-facere-fuga-tenetur-doloribus-veritatis-et',
                'location' => 'Minnesota',
                'description' => 'Autem culpa eaque et cupiditate fuga enim consequuntur sunt reprehenderit.',
                'image' => 'images/img.png',
                'size' => '3',
                'quantity' => 4,
                'weight' => 6,
                'dimensions' => 5,
                'price' => 1687,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'consequatur',
                'brand' => 'magnam',
                'slug' => 'inventore-quis-aliquid-occaecati-odit-deleniti-aliquam-magnam',
                'location' => 'Tennessee',
                'description' => 'Dignissimos et omnis excepturi alias ea et unde occaecati est vel dolor.',
                'image' => 'images/img.png',
                'size' => '1',
                'quantity' => 8,
                'weight' => 9,
                'dimensions' => 2,
                'price' => 837,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'omnis',
                'brand' => 'aut',
                'slug' => 'qui-nemo-nihil-sequi-at-eum-et',
                'location' => 'Montana',
                'description' => 'Libero quas et doloribus quia nesciunt voluptatibus id voluptas omnis qui voluptates.',
                'image' => 'images/img.png',
                'size' => '4',
                'quantity' => 3,
                'weight' => 3,
                'dimensions' => 4,
                'price' => 1479,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'vel',
                'brand' => 'delectus',
                'slug' => 'et-distinctio-corporis-eius',
                'location' => 'Illinois',
                'description' => 'Et nulla aspernatur architecto a libero dolor pariatur.',
                'image' => 'images/img.png',
                'size' => '2',
                'quantity' => 5,
                'weight' => 3,
                'dimensions' => 7,
                'price' => 1087,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'dolor',
                'brand' => 'aliquam',
                'slug' => 'sit-ea-facere-velit-officia-error-quis',
                'location' => 'Arkansas',
                'description' => 'Molestiae aut omnis atque et corporis laudantium ut ullam est reiciendis dolores et.',
                'image' => 'images/img.png',
                'size' => '2',
                'quantity' => 2,
                'weight' => 6,
                'dimensions' => 6,
                'price' => 1708,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'non',
                'brand' => 'est',
                'slug' => 'minus-quaerat-cupiditate-in-nam',
                'location' => 'New Hampshire',
                'description' => 'Hic sequi et quo omnis ipsam reprehenderit voluptatem id deserunt consequatur non illum itaque.',
                'image' => 'images/img.png',
                'size' => '4',
                'quantity' => 4,
                'weight' => 5,
                'dimensions' => 7,
                'price' => 488,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'nihil',
                'brand' => 'rerum',
                'slug' => 'ut-excepturi-ratione-molestias-et-veritatis-sunt',
                'location' => 'California',
                'description' => 'Laboriosam culpa perspiciatis et ut officiis quos.',
                'image' => 'images/img.png',
                'size' => '8',
                'quantity' => 1,
                'weight' => 6,
                'dimensions' => 2,
                'price' => 804,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'non',
                'brand' => 'dicta',
                'slug' => 'suscipit-alias-beatae-modi-dolorem-nihil-voluptatum-sint',
                'location' => 'Indiana',
                'description' => 'Quia qui sequi officia veniam voluptates nulla eveniet voluptatum esse voluptatum omnis ratione quia.',
                'image' => 'images/img.png',
                'size' => '9',
                'quantity' => 3,
                'weight' => 9,
                'dimensions' => 6,
                'price' => 1406,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'soluta',
                'brand' => 'sed',
                'slug' => 'ad-libero-asperiores-possimus',
                'location' => 'Minnesota',
                'description' => 'Esse quia iure sapiente provident quia sit alias non.',
                'image' => 'images/img.png',
                'size' => '9',
                'quantity' => 7,
                'weight' => 3,
                'dimensions' => 4,
                'price' => 1673,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'quis',
                'brand' => 'id',
                'slug' => 'nobis-est-suscipit-sit',
                'location' => 'Delaware',
                'description' => 'Facere veritatis voluptatem similique impedit corporis est.',
                'image' => 'images/img.png',
                'size' => '0',
                'quantity' => 8,
                'weight' => 3,
                'dimensions' => 9,
                'price' => 553,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'nisi',
                'brand' => 'pariatur',
                'slug' => 'magni-quia-minima-ut-animi-dolorem-nam',
                'location' => 'Tennessee',
                'description' => 'Reprehenderit quidem magni eum minima est ea aut est quae atque nemo.',
                'image' => 'images/img.png',
                'size' => '0',
                'quantity' => 2,
                'weight' => 3,
                'dimensions' => 6,
                'price' => 1299,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'et',
                'brand' => 'sed',
                'slug' => 'vel-aut-necessitatibus-accusantium-molestias',
                'location' => 'Colorado',
                'description' => 'Nemo nesciunt ut architecto vitae consequuntur atque perferendis velit.',
                'image' => 'images/img.png',
                'size' => '1',
                'quantity' => 3,
                'weight' => 6,
                'dimensions' => 8,
                'price' => 405,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'et',
                'brand' => 'alias',
                'slug' => 'unde-necessitatibus-iste-eius-eaque-distinctio',
                'location' => 'Wisconsin',
                'description' => 'Ducimus repellat aut quasi autem consequatur laudantium.',
                'image' => 'images/img.png',
                'size' => '1',
                'quantity' => 9,
                'weight' => 4,
                'dimensions' => 0,
                'price' => 672,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'ut',
                'brand' => 'voluptas',
                'slug' => 'nobis-laborum-sequi-accusantium-placeat',
                'location' => 'Missouri',
                'description' => 'Nisi et voluptatibus ut dicta quis necessitatibus.',
                'image' => 'images/img.png',
                'size' => '0',
                'quantity' => 4,
                'weight' => 8,
                'dimensions' => 8,
                'price' => 1916,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'dolores',
                'brand' => 'quo',
                'slug' => 'beatae-veritatis-rerum-sit-et-quam',
                'location' => 'Mississippi',
                'description' => 'Et iure rem modi atque perspiciatis dolore dolor vel quasi occaecati.',
                'image' => 'images/img.png',
                'size' => '1',
                'quantity' => 1,
                'weight' => 3,
                'dimensions' => 4,
                'price' => 1748,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'necessitatibus',
                'brand' => 'tempore',
                'slug' => 'quis-quas-eligendi-non-neque-quam-quae-excepturi-laborum',
                'location' => 'Delaware',
                'description' => 'Esse eligendi adipisci recusandae neque aut dolor.',
                'image' => 'images/img.png',
                'size' => '7',
                'quantity' => 4,
                'weight' => 5,
                'dimensions' => 3,
                'price' => 881,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'quia',
                'brand' => 'sed',
                'slug' => 'eum-qui-quis-officiis-quia-sunt-veritatis-nemo',
                'location' => 'New Jersey',
                'description' => 'Sit reprehenderit laboriosam hic consectetur ut cupiditate cupiditate magnam porro voluptatibus nihil qui quaerat.',
                'image' => 'images/img.png',
                'size' => '4',
                'quantity' => 1,
                'weight' => 0,
                'dimensions' => 8,
                'price' => 1447,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'quibusdam',
                'brand' => 'soluta',
                'slug' => 'sit-quas-maiores-quidem-perspiciatis-voluptas-vel-placeat',
                'location' => 'Virginia',
                'description' => 'Ex nulla voluptas vitae occaecati error commodi quia quod quia quia.',
                'image' => 'images/img.png',
                'size' => '7',
                'quantity' => 2,
                'weight' => 4,
                'dimensions' => 9,
                'price' => 1677,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'quia',
                'brand' => 'sit',
                'slug' => 'sed-aut-quia-explicabo-repellendus-minima-et-quas-totam',
                'location' => 'Kentucky',
                'description' => 'Deserunt rem dolore ea sequi molestiae architecto amet eveniet nisi culpa porro impedit.',
                'image' => 'images/img.png',
                'size' => '3',
                'quantity' => 3,
                'weight' => 8,
                'dimensions' => 2,
                'price' => 1825,
                'created_at' => '2020-08-12 16:18:52',
                'updated_at' => '2020-08-12 16:18:52',
            ),
        ));
        
        
    }
}