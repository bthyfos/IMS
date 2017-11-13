<?php

use  App\regionalDepartment;
use Illuminate\Database\Seeder;

class regionalDepartmentTableSeeder extends Seeder
{
    public function run()
    {

        $faker = Faker\Factory::create();

       for($i = 0; $i < 1000; $i++) {
        App\regionalDepartment::create([
                'regionId' => $faker->numberBetween(1,100),
                'departmentId' => $faker->numberBetween(1,100)
        ]);
         }
    }
}
