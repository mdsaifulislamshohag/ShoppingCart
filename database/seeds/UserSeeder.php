<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');
        foreach (range(1,100) as $users) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'phone' => $faker->e164PhoneNumber,
                'email_verified_at' => now(),
                'password' => bcrypt('secret'),
                'image' =>$faker->imageUrl($width = 640, $height = 480, 'people'),
                'country' =>$faker->country,
                'present_address' =>$faker->address,
                'parmanent_address' =>$faker->address,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
    }
}
