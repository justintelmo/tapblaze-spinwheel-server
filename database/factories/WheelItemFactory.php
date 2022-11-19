<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WheelItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->randomElement(["gems", "heart", "hammer", "brush", "coins"]);
        $value = $this->faker->numberBetween(1, 750);
        $weight = $this->faker->numberBetween(5, 20);
        return [
            "name" => $name,
            "value" => $value,
            "weight" => $weight
        ];
    }
}
