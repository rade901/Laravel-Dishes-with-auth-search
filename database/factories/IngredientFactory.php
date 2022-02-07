<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->name,
            "slug" => $this->faker->text,
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
