<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DishFactory extends Factory
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
            "description" => $this->faker->text,
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}
