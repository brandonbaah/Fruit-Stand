<?php

use Illuminate\Database\Seeder;

class FruitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([

             [
                 'name' => 'Watermelon',
                 'price' => 4,
                 'expiration_date' => "2017-03-02",
                 'in_stock' => 1,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ],
             [
                 'name' => 'Mangoes',
                 'price' => '2',
                 'expiration_date' => "2017-22-03",
                 'in_stock' => 1,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ],
             [
                 'name' => 'Bananas',
                 'price' => 2,
                 'expiration_date' => "2017-03-12",
                 'in_stock' => 1,
                 'created_at' => date('Y-m-d H:i:s'),
                 'updated_at' => date('Y-m-d H:i:s'),
             ]

         ]);
    }
}
