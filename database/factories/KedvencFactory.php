<?php

namespace Database\Factories;

use App\Models\Felhasznalo;
use App\Models\Kedvenc;
use App\Models\Termek;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kedvenc>
 */
class KedvencFactory extends Factory
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
            'hozzaadva_datum' => fake()->dateTimeBetween('-30 days', 'now'),
        ];
    }
}
