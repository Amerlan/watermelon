<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
        'category_name'=>'Vegetables',
      ]);

      DB::table('categories')->insert([
        'category_name'=>'Fruits',
      ]);

      DB::table('categories')->insert([
        'category_name'=>'Juice',
      ]);
      
      DB::table('categories')->insert([
        'category_name'=>'Dried',
    ]);
    }
}
