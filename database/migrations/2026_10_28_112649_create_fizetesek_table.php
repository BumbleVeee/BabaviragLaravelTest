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
        Schema::create('fizetesek', function (Blueprint $table) {
            $table->increments('fizetes_id');

            // Kapcsolat a rendeléshez
            $table->unsignedInteger('rendeles_id');

            // Fizetés adatai
            $table->decimal('osszeg', 10, 2);
            $table->string('fizetesi_mod');
            $table->string('statusz')->default('folyamatban');
            $table->dateTime('fizetes_datuma')->nullable();

            // Idegen kulcs
            $table->foreign('rendeles_id')
                ->references('rendeles_id')
                ->on('rendelesek')
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fizetesek');
    }
};
