<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Aceh Gayo Coffee (100 Gram)',
            'slug' => 'aceh-gayo-100-gram',
            'category_id'=> '2',
            'description'=> 'In the westernmost region of Indonesia, two types of coffee are produced, namely Arabica and Robusta. Well, the most famous thing from Aceh is its Gayo Arabica coffee which is predicted to be one of the best coffees in the world. The strongest characteristic of Aceh Gayo coffee is its very sharp aroma. In addition, Gayo coffee does not leave a bitter aftertaste that sticks to the tongue after drinking it, unlike most other types of coffee which leave a bitter aftertaste. This is the reason why many people enjoy Aceh Gayo coffee.
            In the westernmost region of Indonesia, two types of coffee are produced, namely Arabica and Robusta. Well, the most famous thing from Aceh is its Gayo Arabica coffee which is predicted to be one of the best coffees in the world. The strongest characteristic of Aceh Gayo coffee is its very sharp aroma. In addition, Gayo coffee does not leave a bitter aftertaste that sticks to the tongue after drinking it, unlike most other types of coffee which leave a bitter aftertaste. This is the reason why many people enjoy Aceh Gayo coffee.',
            'stock'=> 100,
            'weight'=> 100,
            'price'=> 10000,
            'image'=>'Assets\images\img-pro-01.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Lampung Coffee (200 Gram)',
            'slug' => 'lampung-coffee-200-gram',
            'category_id'=> '1',
            'description'=> 'Lampung coffee is very superior to Robusta coffee. The most pronounced characteristic of Nusantara coffee from Lampung is its smooth texture, but the taste is quite strong. The dry processing method used in processing Lampung coffee beans is believed to be the origin of its strong taste and characteristics in it.',
            'stock'=> 100,
            'weight'=> 200,
            'price'=> 30000,
            'image'=>'Assets\images\img-pro-02.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Toraja Coffee (400 Gram)',
            'slug' => 'toraja-coffee-400-gram',
            'category_id'=> '2',
            'description'=> 'Having another name Celebes Kalossi, this coffee from the Sulawesi region has a very distinctive aroma as well as fragrant. What makes it quite favorable is the low acidity level. The uniqueness of the characteristics of Toraja coffee lies in the tendency of the resulting floral and fruity flavors. In addition, the coffee`s strong and slightly sour taste leaves a unique aftertaste on the tongue.',
            'stock'=> 100,
            'weight'=> 400,
            'price'=> 50000,
            'image'=>'Assets\images\img-pro-03.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Javanese Coffee(300 Gram)',
            'slug' => 'javanese-coffee-300-gram',
            'category_id'=> '2',
            'description'=> 'The production of Javanese coffee beans is generally carried out using the wet processing method so that the taste may be slightly different and not as strong as coffee beans produced in Sumatra or Sulawesi. Even so, this type of Arabica coffee is very much enjoyed because the taste is considered `balanced`. The level of acidity is medium and the thickness is not too thick, as well as the breezy aroma of the spices that are produced creates their own characteristics when you drink it.',
            'stock'=> 100,
            'weight'=> 200,
            'price'=> 25000,
            'image'=>'Assets\images\img-pro-04.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '1',
            'name'=> 'Bali Kintamani Coffee(200 Gram)',
            'slug' => 'bali-kintamani-coffee-200-gram',
            'category_id'=> '1',
            'description'=> 'The characteristic of this Indonesian coffee is the fresh taste of sour (citrus) like oranges. The aroma is considered exotic, complemented by a light texture, making this coffee less bitter and does not leave a thick aftertaste afterward. So, for that reason, this type of coffee might be enjoyed more by people who don1`t really like drinking coffee with a `heavy` body.',
            'stock'=> 100,
            'weight'=> 200,
            'price'=> 34000,
            'image'=>'Assets\images\img-pro-05.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Flores Bajawa Coffee(200 Gram)',
            'slug' => 'flores-bajawa-coffee-200-gram',
            'category_id'=> '2',
            'description'=> 'This Arabica coffee from Flores Bajawa produces a medium acidity level and a light taste texture. Apart from its tantalizing aroma, the characteristics of this coffee are also known for its sweet sensation as well as the taste of nuts and herbs in it. This uniqueness that you may not be able to enjoy in other coffees. No wonder this type of Flores Bajawa can penetrate the international market because of these advantages.',
            'stock'=> 100,
            'weight'=> 200,
            'price'=> 40000,
            'image'=>'Assets\images\img-pro-06.jpg',
        ]);

        DB::table('products')->insert([
            'store_id' => '2',
            'name'=> 'Papua Wamena Coffee(150 Gram)',
            'slug' => 'papua-wamena-150-gram',
            'category_id'=> '1',
            'description'=> 'The sharpness of the aroma with a mild taste is the hallmark of this archipelago coffee from the eastern part of Indonesia. Similar to Balinese coffee which has a floral taste, Papua Wamena coffee is also equipped with fragrant shades of chocolate and herbs. Aftertaste `smokey` after drinking it became its own characteristic and uniqueness. Its soft and non-greasy texture is also very friendly on the mouth.',
            'stock'=> 100,
            'weight'=> 150,
            'price'=> 30000,
            'image'=>'Assets\images\img-pro-07.jpg',
        ]);
    }
}
