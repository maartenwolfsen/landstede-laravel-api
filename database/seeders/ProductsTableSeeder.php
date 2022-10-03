<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('products')->insert([
                'title' => Str::random(10),
                'body' => Str::random(100),
                'image' => "https://www.arraymedical.com/wp-content/uploads/2018/12/product-image-placeholder.jpg",
                'price' => 99.99
            ]);
        }
    }
}
