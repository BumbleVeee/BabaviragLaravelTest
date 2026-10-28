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
        Schema::create('rendelesek', function (Blueprint $table) {
            $table->increments('rendeles_id');

            // Kapcsolatok
            $table->unsignedInteger('felhasznalo_id');
            $table->unsignedInteger('szallitasi_cim_id');
            $table->unsignedInteger('szamlazasi_cim_id');

            // Rendelés adatai
            $table->dateTime('rendeles_datuma')->useCurrent();
            $table->string('statusz')->default('feldolgozas_alatt');

            // Összegek
            $table->decimal('osszeg', 10, 2);
            $table->decimal('szallitasi_koltseg', 10, 2)->default(0);

            // Fizetés és szállítás
            $table->string('fizetesi_mod');
            $table->string('szallitasi_mod');

            // Egyéb adatok
            $table->text('megjegyzes')->nullable();
            $table->boolean('fizetve')->default(false);

            // Idegen kulcsok
            $table->foreign('felhasznalo_id')
                ->references('felhasznalo_id')
                ->on('felhasznalok')
                ->restrictOnDelete();

            $table->foreign('szallitasi_cim_id')
                ->references('cim_id')
                ->on('cimek')
                ->restrictOnDelete();

            $table->foreign('szamlazasi_cim_id')
                ->references('cim_id')
                ->on('cimek')
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendelesek');
    }
};
