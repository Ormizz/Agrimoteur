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
        // table exporter 
        Schema::create('spatb36', function (Blueprint $table) {
            $table->id();
            $table->string("idNavire")->foreign("idNavire")->references("id")->on("SPATB35");
            $table->string("idVille")->foreign("idVille")->references("id")->on("SPATB34");
            $table->UnsignedBigInteger('NumLettreVoiture');
            $table->UnsignedBigInteger('NbrePalette');
            $table->date('DteExportation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_p_a_t_b36_s');
    }
};
