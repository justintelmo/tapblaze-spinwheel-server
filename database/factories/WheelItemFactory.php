<?php

namespace Database\Factories;

use App\Models\WheelItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class WheelItemFactory extends Factory
{

    protected $model = WheelItem::class;
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
