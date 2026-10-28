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
        Schema::create('ertekelesek', function (Blueprint $table) {
            $table->increments('ertekeles_id');

            // Kapcsolatok
            $table->unsignedInteger('termek_id');
            $table->unsignedInteger('felhasznalo_id');

            // Értékelés adatai
            $table->unsignedTinyInteger('ertekeles');
            $table->string('kep_url')->nullable();
            $table->text('szoveg')->nullable();
            $table->dateTime('datum')->useCurrent();
            $table->boolean('jovahagyva')->default(false);

            // Kapcsolat a termekek táblával
            $table->foreign('termek_id')
                ->references('termek_id')
                ->on('termekek')
                ->cascadeOnDelete();

            // Kapcsolat a felhasznalok táblával
            $table->foreign('felhasznalo_id')
                ->references('felhasznalo_id')
                ->on('felhasznalok')
                ->cascadeOnDelete();

            // Egy felhasználó egy terméket csak egyszer értékelhessen
            $table->unique(['termek_id', 'felhasznalo_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ertekelesek');
    }
};
