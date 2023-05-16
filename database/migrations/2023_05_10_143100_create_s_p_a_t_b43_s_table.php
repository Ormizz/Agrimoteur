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
        //type-utlisateur
        Schema::create('spatb43', function (Blueprint $table) {
            $table->string('idTypeUtilisateur')->primary();
            $table->string("LibTypeUtilisateur");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spatb43');
    }
};
