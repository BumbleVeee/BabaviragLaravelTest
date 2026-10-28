<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kosarak', function (Blueprint $table) {
            $table->increments('kosar_id');

            // Kapcsolatok
            $table->unsignedInteger('felhasznalo_id');
            $table->unsignedInteger('termek_id');

            // Kosár adatai
            $table->unsignedInteger('mennyiseg')->default(1);
            $table->dateTime('hozzaadva_datum')->useCurrent();

            // Kapcsolat a felhasznalok táblával
            $table->foreign('felhasznalo_id')
                ->references('felhasznalo_id')
                ->on('felhasznalok')
                ->cascadeOnDelete();

            // Kapcsolat a termekek táblával
            $table->foreign('termek_id')
                ->references('termek_id')
                ->on('termekek')
                ->cascadeOnDelete();

            // Egy termék csak egyszer szerepeljen ugyanannak a
            // felhasználónak a kosarában
            $table->unique(['felhasznalo_id', 'termek_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kosarak');
    }
};
