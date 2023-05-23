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
        //hormoner
        Schema::create('spatb17', function (Blueprint $table) {
            $table->string("")->primary();
            $table->string("idPhyto")->foreign("idPhyto")->references("id")->on("SPATB12");
            $table->string("idParcelle")->foreign("idParcelle")->references("id")->on("SPATB15");
            $table->date("DteHormonage");
            $table->unsignedBigInteger("NbrePlantHormoner");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spatb17');
    }
};
