<?php

namespace Database\Factories;

use App\Models\Fizetes;
use App\Models\Rendeles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Fizetes>
 */
class FizetesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rendeles_id' => Rendeles::factory(),
            'fizetes_modja' => fake()->randomElement(['Készpénz', 'Bankkártya', 'Átutalás']),
            'fizetes_allapota' => fake()->randomElement(['Fizetve', 'Függőben', 'Elutasítva']),
            'fizetes_datum' => fake()->dateTimeBetween('-30 days', 'now'),
        ];
    }
}
