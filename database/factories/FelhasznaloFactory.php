<?php

namespace Database\Factories;

use App\Models\Felhasznalo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Felhasznalo>
 */
class FelhasznaloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'jelszo_hash' => bcrypt('password'),
            'keresztnev' => fake()->firstName(),
            'vezeteknev' => fake()->lastName(),
            'telefon' => fake()->phoneNumber(),
            'regisztracio_datuma' => now(),
            'utolso_belepes' => now(),
            'szerepkor' => 'user',
        ];
    }
}
