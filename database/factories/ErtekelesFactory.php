<?php

namespace Database\Factories;

use App\Models\Ertekeles;
use App\Models\Felhasznalo;
use App\Models\Termek;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ertekeles>
 */
class ErtekelesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'felhasznalo_id' => Felhasznalo::factory(),
            'termek_id' => Termek::factory(),
            'ertekeles' => fake()->numberBetween(1, 5),
            'komment' => fake()->sentence(),
        ];
    }
}
