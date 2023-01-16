<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_user')->insert([
            'name' => Str::random(10),
            'pr_apellido' => Str::random(10),
            'sg_apellido' => Str::random(10),
        ]);
    }


}
