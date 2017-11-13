<?php

 
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
 
use Faker\Factory as Faker;

class productTableSeeder extends Seeder
{
    
    public function run()
    {
      
       $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('products')->insert([
	            'id' => $faker->id,
	            'name' => $faker->name,
	            'productTypeId' => $faker->productTypeId,
	            'userId' => $faker->userId,
	            'specification' => $faker->specification,
	            'initialQty' => $faker->initialQty,
	              'availableQty' => $faker->availableQty,
	                'price' => $faker->price,
	        ]);
        }
    }
}
