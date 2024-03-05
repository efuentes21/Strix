<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competitor>
 */
class CompetitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni' => fake()->unique()->dni(),
            'name' => fake()->name(),
            'address' => fake()->address(),
            'birthdate' => fake()->date(),
            'pro' => fake()->numberBetween(0, 1),
            'insurance'
        ];
    }
}
