<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');
        foreach (range(1,50) as $index) {
            DB::table('products')->insert([
                'category_id' => 1,
                'subcategory_id' => 1,
                'color_id' => 1,
                'image_id' => 1,
                'brand' => 'samsung',
                'model' => $faker->word,
                'cover' => $faker->imageUrl($width = 640, $height = 480, 'technics'),
                'quantity' =>$faker->randomDigit,
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 4),
                'details' =>$faker->realText(500),
                'release' =>$faker->date($format = 'Y-m-d', $max = 'now'),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }



    }
}
