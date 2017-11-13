<?php
 
use  App\Department;
use Illuminate\Database\Seeder;

class departmentTableSeeder extends Seeder
{
   
    public function run()
    {
      $faker = Faker\Factory::create();

       for($i = 0; $i < 1000; $i++) {
        App\Department::create([
                'name' => $faker->name
        ]);
         }
    }
}
