<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class useRoleTableSeeder extends Seeder
{
      public function run()
    {
        DB::table('user_roles')->insert(
            [
            'name' => 'admin',
               ],
            [
                'name' => 'user',
            ]

        );
    }
}
