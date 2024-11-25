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
        Schema::create('garages', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 250);
            $table->string('rua', 250);
            $table->string('numero', 16);
            $table->string('cep', 16);
            $table->string('bairro', 250);
            $table->string('cidade', 250);
            $table->string('estado', 250);
            $table->integer('capacidade');
            $table->boolean('is_active');
            $table->unsignedBigInteger('dono_id');
            $table->foreign('dono_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garages');
    }
};
