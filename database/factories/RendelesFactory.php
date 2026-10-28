<?php

namespace Database\Factories;

use App\Models\Cim;
use App\Models\Felhasznalo;
use App\Models\Rendeles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Rendeles>
 */
class RendelesFactory extends Factory
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
            'szallitasi_cim_id' => Cim::factory(),
            'szamlazasi_cim_id' => Cim::factory(),

            'rendeles_datuma' => fake()->dateTimeBetween('-1 year', 'now'),
            'statusz' => fake()->randomElement([
                'feldolgozas_alatt',
                'feldolgozva',
                'kiszallitva',
                'torolve',
            ]),

            'osszeg' => fake()->randomFloat(2, 1000, 100000),
            'szallitasi_koltseg' => fake()->randomFloat(2, 0, 3000),

            'fizetesi_mod' => fake()->randomElement([
                'utanvet',
                'atutalas',
            ]),

            'szallitasi_mod' => fake()->randomElement([
                'hazhozszallitas',
                'csomagpont',
            ]),

            'megjegyzes' => fake()->optional()->sentence(),
            'fizetve' => fake()->boolean(),
        ];
    }
}
