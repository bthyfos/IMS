<?php

 
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
use Faker\Factory as Faker;

class productTypeTableSeeder extends Seeder
{
    public function run()
    {
         $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('product_types')->insert([
	            'id' => $faker->id,
	            'name' => $faker->name,
	         
	        ]);
        }
    }
}
