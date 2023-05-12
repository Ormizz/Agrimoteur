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
        // table parcelle
        Schema::create('spatb15', function (Blueprint $table) {
            $table->id();
            $table->string("idPlanteur")->foreign("idPlanteur")->references("id")->on("SPATB10");
            $table->string("idProdAgricole")->foreign("idProdAgricole")->references("id")->on("SPATB13");
            $table->string("Localisation");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spatb15');
    }
};
