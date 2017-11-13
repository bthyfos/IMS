<?php

use Illuminate\Database\Seeder;
use App\TestData;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();

    for($i = 0; $i < 1000; $i++) {
        App\TestData::create([
            'username' => $faker->userName,
            'name' => $faker->name,
          
        ]);
         }
    }
}

