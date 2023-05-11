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
        //table connecter 
        Schema::create('spatb49', function (Blueprint $table) {
            //$table->id();
            $table->date("DteConnexion");
            $table->time("HeureDeb");
            $table->time("HeureFin");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_p_a_t_b49_s');
    }
};
