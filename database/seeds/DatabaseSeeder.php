<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(useRoleTableSeeder::class);
        //$this->call(regionTableSeeder::class);
       // $this->call(departmentTableSeeder::class);
       /// $this->call(PositionTableSeeder::class);
    }
}
