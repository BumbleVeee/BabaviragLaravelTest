<?php

namespace Database\Seeders;

use App\Models\Cim;
use App\Models\Ertekeles;
use App\Models\Felhasznalo;
use App\Models\Fizetes;
use App\Models\Kategoria;
use App\Models\Kedvenc;
use App\Models\Kosar;
use App\Models\Rendeles;
use App\Models\RendelesTetel;
use App\Models\Termek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        {
        // 1. Felhasználók
        Felhasznalo::factory()->count(10)->create();

        // 2. Kategóriák
        Kategoria::factory()->count(5)->create();

        // 3. Címek
        Cim::factory()->count(15)->create();

        // 4. Termékek
        Termek::factory()->count(20)->create();

        // 5. Rendelések
        Rendeles::factory()->count(10)->create();

        // 6. Rendelési tételek
        RendelesTetel::factory()->count(20)->create();

        // 7. Kosár
        Kosar::factory()->count(10)->create();

        // 8. Értékelések
        Ertekeles::factory()->count(10)->create();

        // 9. Fizetések
        Fizetes::factory()->count(10)->create();

        // 10. Kedvencek
        Kedvenc::factory()->count(10)->create();
    }
    }
}
