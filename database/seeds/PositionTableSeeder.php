<?php

use Illuminate\Database\Seeder;
use  App\Department;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker\Factory::create();

       for($i = 0; $i < 10; $i++) {
        App\Product::create([
                'name' => $faker->name
        ]);
         }
        
            }
}
