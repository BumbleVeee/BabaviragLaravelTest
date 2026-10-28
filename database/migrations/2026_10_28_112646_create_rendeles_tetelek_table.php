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
        Schema::create('rendeles_tetelek', function (Blueprint $table) {
            $table->increments('tetel_id');

            // Kapcsolatok
            $table->unsignedInteger('rendeles_id');
            $table->unsignedInteger('termek_id');

            // Rendelési tétel adatai
            $table->unsignedInteger('mennyiseg');
            $table->decimal('egysegar', 10, 2);
            $table->decimal('osszesen', 10, 2);

            // Kapcsolat a rendelesek táblával
            $table->foreign('rendeles_id')
                ->references('rendeles_id')
                ->on('rendelesek')
                ->cascadeOnDelete();

            // Kapcsolat a termekek táblával
            $table->foreign('termek_id')
                ->references('termek_id')
                ->on('termekek')
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendeles_tetelek');
    }
};
