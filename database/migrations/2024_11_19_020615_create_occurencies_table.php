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
        Schema::create('occurencies', function (Blueprint $table) {
            $table->id();
            $table->string('endereco');
            $table->enum('tipo', ['Senha errada', 'Tentativa de arrombamento', 'Falha no compartimento']);
            $table->string('foto_tirada')->nullable();
            $table->unsignedBigInteger('entrega_id');
            $table->foreign('entrega_id')->references('id')->on('deliveries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occurencies');
    }
};
