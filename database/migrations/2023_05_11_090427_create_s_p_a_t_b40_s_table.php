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
        //table personnel
        Schema::create('spatb40', function (Blueprint $table) {
            $table->id();
            $table->string("Nom");
            $table->string("Prenom");
            $table->date("DteNaissance");
            $table->string("Status");
            $table->string("idSexe")->foreign("idSexe")->references("idSexe")->on("SPATB41");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spatb40');
    }
};
