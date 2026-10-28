<?php

namespace Database\Factories;

use App\Models\Kategoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kategoria>
 */
class KategoriaFactory extends Factory
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
            'szulo_kategoria_id' => null,
            'telefon' => fake()->phoneNumber(),
            'kep_url' => fake()->imageUrl(),
            'sorrend' => fake()->numberBetween(1, 100),
        ];
    }
}
