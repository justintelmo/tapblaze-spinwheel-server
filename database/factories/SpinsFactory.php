<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SpinsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "result" => $this->faker->numberBetween(0, 7)
        ];
    }
}
