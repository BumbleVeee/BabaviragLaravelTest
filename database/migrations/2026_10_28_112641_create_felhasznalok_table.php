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
        Schema::create('felhasznalok', function (Blueprint $table) {
            $table->increments('felhasznalo_id');

            $table->string('email')->unique();
            $table->string('jelszo_hash');

            $table->string('keresztnev');
            $table->string('vezeteknev');
            $table->string('telefon')->nullable();

            $table->dateTime('regisztracio_datuma')->useCurrent();
            $table->dateTime('utolso_belepes')->nullable();

            $table->string('szerepkor')->default('vasarlo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('felhasznalok');
    }
};
