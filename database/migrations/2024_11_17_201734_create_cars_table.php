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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('fabricante', 250);
            $table->string('modelo', 250);
            $table->string('cor', 32);
            $table->integer('capacidade_carga_kg');
            $table->integer('qtd_compartimentos');
            $table->integer('autonomia_km');
            $table->integer('garagem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
