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
        //table Emballages 
        Schema::create('spatb20', function (Blueprint $table) {
            $table->id();
            $table->string("LibEmballage");
            $table->string("idCalibre")->foreign("idCalibre")->references("id")->on("SPATB14");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spatb20');
    }
};
