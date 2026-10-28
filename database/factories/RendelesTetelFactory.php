<?php

namespace Database\Factories;

use App\Models\Rendeles;
use App\Models\RendelesTetel;
use App\Models\Termek;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<RendelesTetel>
 */
class RendelesTetelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mennyiseg = fake()->numberBetween(1, 5);
        $egysegar = fake()->randomFloat(2, 500, 30000);

        return [
            'rendeles_id' => Rendeles::factory(),
            'termek_id' => Termek::factory(),
            'mennyiseg' => $mennyiseg,
            'egysegar' => $egysegar,
            'osszesen' => round($egysegar * $mennyiseg, 2),
        ];
    }
}
