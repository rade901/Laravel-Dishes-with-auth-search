<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ingredient;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ingredient::factory(10)->create();
    }
}
