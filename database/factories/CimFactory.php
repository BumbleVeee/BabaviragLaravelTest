<?php

namespace Database\Factories;

use App\Models\Cim;
use App\Models\Felhasznalo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cim>
 */
class CimFactory extends Factory
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
            'iranyitoszam' => fake()->postcode(),
            'varos' => fake()->city(),
            'utca' => fake()->streetName(),
            'hazszam' => fake()->buildingNumber(),
            'emelet' => fake()->numberBetween(0, 10),
            'ajto' => fake()->numberBetween(1, 100),
            'alapertelmezett' => fake()->boolean(),
            'cim_neve' => fake()->word(),
        ];
    }
}
