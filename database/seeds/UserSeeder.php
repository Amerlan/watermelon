<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name'=>'Walter Melon',
          'role_id'=>1,
          'email'=>'mail@email.com',
          'password'=>bcrypt('12345678')
        ]);
    }
}
