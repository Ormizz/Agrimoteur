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
        // table etre
        Schema::create('spatb04', function (Blueprint $table) {
            $table->string("idEtre")->primary();
            $table->string("idContrat")->foreign("idContrat")->references("id")->on("SPATB01");
            $table->string("idType")->foreign("idType")->references("id")->on("SPATB02");
            $table->UnsignedBigInteger("MntContratAvance");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spatb04');
    }
};
