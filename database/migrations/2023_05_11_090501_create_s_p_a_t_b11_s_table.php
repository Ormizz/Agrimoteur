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
        //table plantation
        Schema::create('spatb11', function (Blueprint $table) {
            $table->string("idPlantation")->primary();
            $table->string("LibPlantation");
            $table->string("idPlanteur")->foreign("idPlanteur")->references("id")->on("SPATB10");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spatb11');
    }
};
