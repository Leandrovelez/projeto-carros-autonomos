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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('endereco_entrega', 250);
            $table->string('nome_destinatario', 250);
            $table->unsignedBigInteger('store_id');
            $table->unsignedBigInteger('car_id')->nullable();
            $table->string('status', 32);
            $table->string('comentario', 250)->nullable();
            $table->integer('compartimento');
            $table->integer('tentativa')->nullable();

            $table->foreign('store_id')->references('id')->on('users');
            $table->foreign('car_id')->references('id')->on('cars');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
