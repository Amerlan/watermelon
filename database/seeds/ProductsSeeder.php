<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert(['name' => 'beel pepper',
      'category' => 1,
      'price' => 15,
      'photo'=> 'https://sun9-33.userapi.com/c858136/v858136729/1dfc10/ukJX_SWSrSI.jpg',]);

      DB::table('products')->insert(['name' => 'strawberry',
      'category' => 2,
      'price' => 30,
      'photo'=> 'https://sun9-65.userapi.com/c858136/v858136729/1dfc19/fsdzAT5GnJ8.jpg',]);

      DB::table('products')->insert(['name' => 'green beans',
      'category' => 1,
      'price' => 20,
      'photo'=> 'https://sun9-52.userapi.com/c858136/v858136729/1dfc22/k-8lLumpHb8.jpg',]);

      DB::table('products')->insert(['name' => 'purple cabbage',
      'category' => 1,
      'price' => 35,
      'photo'=> 'https://sun9-60.userapi.com/c858136/v858136729/1dfc2b/_B5uDTgX088.jpg',]);

      DB::table('products')->insert(['name' => 'tomatoe',
      'category' => 1,
      'price' => 45,
      'photo'=> 'https://sun9-27.userapi.com/c858136/v858136729/1dfc34/-r_RV1NLuNY.jpg',]);

      DB::table('products')->insert(['name' => 'brocolli',
      'category' => 1,
      'price' => 100,
      'photo'=> 'https://sun9-32.userapi.com/c858136/v858136729/1dfc3d/6ZenNZHHp88.jpg',]);

      DB::table('products')->insert(['name' => 'carrots',
      'category' => 1,
      'price' => 18,
      'photo'=> 'https://sun9-15.userapi.com/c858136/v858136729/1dfc46/2bhefELtQ6g.jpg',]);

      DB::table('products')->insert(['name' => 'orange juice',
      'category' => 3,
      'price' => 50,
      'photo'=> 'https://sun9-43.userapi.com/c858136/v858136729/1dfc4f/Brf4PDyXRDQ.jpg',]);

      DB::table('products')->insert(['name' => 'onion',
      'category' => 1,
      'price' => 28,
      'photo'=> 'https://sun9-33.userapi.com/c858136/v858136729/1dfc58/14s6ox2_Hok.jpg',]);

      DB::table('products')->insert(['name' => 'apple',
      'category' => 2,
      'price' => 23,
      'photo'=> 'https://sun9-10.userapi.com/c858136/v858136729/1dfc6a/Wyh20-4RvF8.jpg',]);

      DB::table('products')->insert(['name' => 'garlic',
      'category' => 1,
      'price' => 40,
      'photo'=> 'https://sun9-48.userapi.com/c858136/v858136729/1dfc61/dAcLVBRBOac.jpg',]);

      DB::table('products')->insert(['name' => 'chilli',
      'category' => 1,
      'price' => 15,
      'photo'=> 'https://sun9-26.userapi.com/c858136/v858136729/1dfc07/UgpvvsAMH3U.jpg',]);

      DB::table('products')->insert(['name' => 'pineapple',
      'category' => 2,
      'price' => 28,
      'photo'=> 'https://images-na.ssl-images-amazon.com/images/I/71%2BqAJehpkL._SX569_.jpg',]);

      DB::table('products')->insert(['name' => 'orange',
      'category' => 2,
      'price' => 23,
      'photo'=> 'https://5.imimg.com/data5/VN/YP/MY-33296037/orange-600x600-500x500.jpg',]);

      DB::table('products')->insert(['name' => 'banana',
      'category' => 2,
      'price' => 13,
      'photo'=> 'https://img.pravda.ru/image/preview/article/5/4/1/1439541_five.jpeg',]);

      DB::table('products')->insert(['name' => 'grape',
      'category' => 2,
      'price' => 30,
      'photo'=> 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Table_grapes_on_white.jpg',]);

      DB::table('products')->insert(['name' => 'apple juice',
      'category' => 3,
      'price' => 100,
      'photo'=> 'https://sun9-51.userapi.com/c857224/v857224704/17eeeb/TDljYQY8abg.jpg',]);

      DB::table('products')->insert(['name' => 'pineapple juice',
      'category' => 3,
      'price' => 150,
      'photo'=> 'https://sun9-44.userapi.com/c206528/v206528597/109058/wpZtmzvMwsE.jpg',]);

      DB::table('products')->insert(['name' => 'cherry juice',
      'category' => 3,
      'price' => 130,
      'photo'=> 'https://sun9-25.userapi.com/c857224/v857224729/17cc68/BhLij8A3-lY.jpg',]);

      DB::table('products')->insert(['name' => 'almonds',
      'category' => 4,
      'price' => 75,
      'photo'=> 'https://nuts.com/images/rackcdn/ed910ae2d60f0d25bcb8-80550f96b5feb12604f4f720bfefb46d.ssl.cf1.rackcdn.com/6df7c7ebdf9d5744-P_RqdX0P-large.jpg',]);

      DB::table('products')->insert(['name' => 'cashews',
      'category' => 4,
      'price' => 100,
      'photo'=> 'https://nuts.com/images/rackcdn/ed910ae2d60f0d25bcb8-80550f96b5feb12604f4f720bfefb46d.ssl.cf1.rackcdn.com/e38270819a17a63e-m_8HiZaE-zoom.jpg',]);

      DB::table('products')->insert(['name' => 'peanuts',
      'category' => 4,
      'price' => 80,
      'photo'=> 'https://nuts.com/images/rackcdn/ed910ae2d60f0d25bcb8-80550f96b5feb12604f4f720bfefb46d.ssl.cf1.rackcdn.com/4064_Cajun+Roasted+P-gnOJbo1M-large.jpg',]);

      DB::table('products')->insert(['name' => 'pecans',
      'category' => 4,
      'price' => 95,
      'photo'=> 'https://nuts.com/images/rackcdn/ed910ae2d60f0d25bcb8-80550f96b5feb12604f4f720bfefb46d.ssl.cf1.rackcdn.com/c2423efab535a2bd-q-mmDv8t-large.jpg',]);

      DB::table('products')->insert(['name' => 'sunflower seeds',
      'category' => 4,
      'price' => 25,
      'photo'=> 'https://www.sultanspice.co.nz/wp-content/uploads/2019/04/Sunflower-Seeds.png',]);
      DB::table('products')->insert(['name' => 'walnuts',
      'category' => 4,
      'price' => 110,
      'photo'=> 'https://nuts.com/images/rackcdn/ed910ae2d60f0d25bcb8-80550f96b5feb12604f4f720bfefb46d.ssl.cf1.rackcdn.com/3022_English+Walnuts-sxWQzoJb-zoom.jpg',]);

    }
}
