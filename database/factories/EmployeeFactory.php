<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstname(),
            'last_name' => fake()->lastname(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'age' => fake()->numberBetween($min = 6, $max = 21),
            'position' => fake()->randomElement(['IT', 'Sales']),
            'email' => fake()->safeEmail(),
        ];
    }
}