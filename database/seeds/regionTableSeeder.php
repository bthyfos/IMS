<?php

use  App\Region;
use Illuminate\Database\Seeder;

class regionTableSeeder extends Seeder
{

    public function run()
    {

        $faker = Faker\Factory::create();

       for($i = 0; $i < 1000; $i++) {
        App\Region::create([
                'name' => $faker->name
        ]);
         }
    }
}
