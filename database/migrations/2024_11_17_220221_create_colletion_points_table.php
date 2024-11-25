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
        Schema::create('colletion_points', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 250);
            $table->string('rua', 250);
            $table->string('numero', 16);
            $table->string('cep', 16);
            $table->string('bairro', 250);
            $table->string('cidade', 250);
            $table->string('estado', 250);
            $table->string('nome_responsavel', 250);
            $table->boolean('is_active');
            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colletion_points');
    }
};
