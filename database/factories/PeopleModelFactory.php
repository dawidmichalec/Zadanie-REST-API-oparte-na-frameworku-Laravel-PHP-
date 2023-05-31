<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PeopleModel>
 */
class PeopleModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'date_of_birth' => $this->faker->date(),
            'phone_number' => $this->faker->randomNumber(9, true),
            'street' => $this->faker->sentence(2),
            'building_number' => $this->faker->randomNumber(3, false),
            'flat_number' => $this->faker->randomNumber(3, false),
            'city' => $this->faker->word(),
            'country' => $this->faker->word(),
        ];
    }
}
