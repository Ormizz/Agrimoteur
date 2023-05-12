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
        //table contenir
        Schema::create('spatb21', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idEmballage');
            $table->unsignedBigInteger('idParcelle');
            $table->unsignedBigInteger('idCalibre');
            $table->integer('QteProduction');
            $table->date('DateProduction');
            $table->timestamps();
            
            $table->foreign('idEmballage')->references('id')->on('SPATB20');
            $table->foreign('idParcelle')->references('id')->on('SPATB15');
            $table->foreign('idCalibre')->references('id')->on('SPATB14');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spatb21');
    }
};
