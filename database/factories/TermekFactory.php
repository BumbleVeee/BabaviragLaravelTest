<?php

namespace Database\Factories;

use App\Models\Termek;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Termek>
 */
class TermekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nev' => fake()->word(),
            'leiras' => fake()->sentence(),
            'ar' => fake()->randomFloat(2, 1, 100),
            'keszlet' => fake()->numberBetween(0, 100),
            'kep_url' => fake()->imageUrl(),
            'sorrend' => fake()->numberBetween(1, 100),
        ];
    }
}
