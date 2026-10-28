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
        Schema::create('kedvencek', function (Blueprint $table) {
            $table->increments('kedvenc_id');

            $table->unsignedInteger('felhasznalo_id');
            $table->unsignedInteger('termek_id');

            $table->dateTime('hozzaadva_datum')->useCurrent();

            $table->foreign('felhasznalo_id')
                ->references('felhasznalo_id')
                ->on('felhasznalok')
                ->cascadeOnDelete();

            $table->foreign('termek_id')
                ->references('termek_id')
                ->on('termekek')
                ->cascadeOnDelete();

            $table->unique(['felhasznalo_id', 'termek_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kedvencek');
    }
};
