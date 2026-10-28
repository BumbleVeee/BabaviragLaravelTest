<?php

namespace Database\Factories;

use App\Models\Felhasznalo;
use App\Models\Kosar;
use App\Models\Termek;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kosar>
 */
class KosarFactory extends Factory
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
            'mennyiseg' => fake()->numberBetween(1, 5),
            'hozzaadva_datum' => fake()->dateTimeBetween('-30 days', 'now'),
        ];
    }
}
