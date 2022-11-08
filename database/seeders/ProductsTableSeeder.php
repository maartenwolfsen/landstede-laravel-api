<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class ProductsTableSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Heren", "Dames", "Accessoires"];

        for ($i = 0; $i < 50; $i++) {
            DB::table('products')->insert([
                'title' => $this->faker->word(),
                'body' => $this->faker->paragraph(3),
                'image' => "https://images.pexels.com/photos/428340/pexels-photo-428340.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
                'price' => $this->faker->randomFloat(2, 1, 200),
                'category' => $categories[array_rand($categories)]
            ]);
        }
    }
}
