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
            $table->integer('garagem_id');
            $table->integer('armazem_id');
            $table->string('status', 32);
            $table->string('comentario', 250)->nullable();
            $table->integer('compartimento');
            $table->integer('tentativa')->nullable();
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
