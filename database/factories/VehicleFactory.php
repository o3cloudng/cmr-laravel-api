<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'chasis_no' => $this->faker->uuid(10),
            'type' => $this->faker->name(),
            'brand' => $this->faker->address(),
            'colour' => $this->faker->colorName (),
            'license' => $this->faker->locale(),
            'profile_id' => $this->faker->numberBetween(1,20),
            'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
