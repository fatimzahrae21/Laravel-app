<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\models\Country::factory(10)->create();
        \App\models\City::factory(50)->create();
        \App\models\Street::factory(50)->create();

    }
}
