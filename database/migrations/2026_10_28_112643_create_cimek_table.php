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
        Schema::create('cimek', function (Blueprint $table) {
            $table->increments('cim_id');

            // A cím tulajdonosa
            $table->unsignedInteger('felhasznalo_id');

            $table->string('iranyitoszam', 10);
            $table->string('varos');
            $table->string('utca');
            $table->string('hazszam', 20);

            $table->string('emelet', 20)->nullable();
            $table->string('ajto', 20)->nullable();

            $table->boolean('alapertelmezett')->default(false);
            $table->string('cim_neve')->nullable();

            // Kapcsolat a felhasznalok táblával
            $table->foreign('felhasznalo_id')
                ->references('felhasznalo_id')
                ->on('felhasznalok')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cimek');
    }
};
