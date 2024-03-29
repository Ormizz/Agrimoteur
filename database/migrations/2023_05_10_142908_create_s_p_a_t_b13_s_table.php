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
        //produitAgricole
        Schema::create('spatb13', function (Blueprint $table) {
            $table->string("idProduitAgricole")->primary();
            $table->string("LibProduitAgricole");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spatb13');
    }
};
