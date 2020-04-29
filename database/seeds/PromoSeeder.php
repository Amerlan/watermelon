<?php

use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
  public function genpromo()
  {
    $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $res = "";
    for ($i = 0; $i < 7; $i++) {
        $res .= $chars[mt_rand(0, strlen($chars)-1)];
    }
    return $res;
  }
    public function run()
    {
        DB::table('promos')->insert(['promo'=>$this->genpromo(), 'discount'=>rand(5, 55)/100]);
        DB::table('promos')->insert(['promo'=>$this->genpromo(), 'discount'=>rand(5, 55)/100]);
        DB::table('promos')->insert(['promo'=>$this->genpromo(), 'discount'=>rand(5, 55)/100]);
        DB::table('promos')->insert(['promo'=>$this->genpromo(), 'discount'=>rand(5, 55)/100]);
        DB::table('promos')->insert(['promo'=>$this->genpromo(), 'discount'=>rand(5, 55)/100]);
        DB::table('promos')->insert(['promo'=>$this->genpromo(), 'discount'=>rand(5, 55)/100]);
    }
}
