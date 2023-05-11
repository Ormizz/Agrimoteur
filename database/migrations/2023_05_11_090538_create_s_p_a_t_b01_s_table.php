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
        //table contrat
        Schema::create('spatb01', function (Blueprint $table) {
            $table->id();
            $table->date("DteContrat");
            $table->time("DureeContrat");
            $table->string("idParcelle")->foreign("idParcelle")->references("id")->on("SPATB15"); 
            $table->string("idTypeContrat")->foreign("idTypeContrat")->references("id")->on("SPATB02");    
            // IdEncadreur??                      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_p_a_t_b01_s');
    }
};
