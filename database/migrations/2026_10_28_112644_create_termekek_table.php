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
        Schema::create('termekek', function (Blueprint $table) {
            $table->increments('termek_id');

            // Kategória
            $table->unsignedInteger('kategoria_id');

            // Alapadatok
            $table->string('nev');
            $table->text('leiras')->nullable();
            $table->decimal('ar', 10, 2);
            $table->decimal('akcios_ar', 10, 2)->nullable();
            $table->string('cikkszam')->unique();

            // Termék tulajdonságai
            $table->decimal('suly', 8, 2)->nullable();
            $table->string('meret')->nullable();
            $table->string('szin')->nullable();
            $table->string('anyag')->nullable();

            // Kép
            $table->string('kep_url')->nullable();

            // Láthatóság
            $table->boolean('lathato')->default(true);

            // Készlet
            $table->unsignedInteger('keszlet_mennyiseg')->default(0);

            // Dátumok
            $table->dateTime('letrehozva')->useCurrent();
            $table->dateTime('frissitve')->useCurrent();

            // Kapcsolat a kategoriak táblával
            $table->foreign('kategoria_id')
                ->references('kategoria_id')
                ->on('kategoriak')
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termekek');
    }
};
