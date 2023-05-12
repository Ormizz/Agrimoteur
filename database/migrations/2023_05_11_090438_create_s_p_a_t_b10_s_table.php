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
        //table Planteur
        Schema::create('spatb10', function (Blueprint $table) {
            $table->id();
            $table->string("Nom");
            $table->string("Prenom");
            $table->string("Adresse");
            $table->unsignedBigInteger("NbreParcelle");
            $table->string("idListeParcelle"); // a revoir
            $table->string("idSexe")->foreign("idSexe")->references("id")->on("SPATB41");
            $table->string("idPays")->foreign("idPays")->references("id")->on("SPATB33");
            $table->string("idEncadreur");// a revoir 
            $table->string("idTypeContrat")->foreign("idTypeContrat")->references("id")->on("SPATB02");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spatb10');
    }
};
