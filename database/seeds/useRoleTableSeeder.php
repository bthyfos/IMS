<?php

use  App\UserRoles;
use Illuminate\Database\Seeder;

class useRoleTableSeeder extends Seeder
{
      public function run()
    {

        $faker = Faker\Factory::create();

       for($i = 0; $i < 1000; $i++) {
        App\UserRoles::create(
        	[
        	'name' => $faker->name
            ]
              
        );
         }
    }
}
