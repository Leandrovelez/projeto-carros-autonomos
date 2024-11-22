<?php

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('deliveries')->truncate();

        Delivery::create([
            "endereco_entrega" => "Rua dos Bobos, 0, São paulo - SP",
            "status" => "Em rota de entrega",
            "nome_destinatario" => "Huguinho",
            "garagem_id" => 1,
            "armazem_id" => 1,
            "compartimento" => 1,
            "tentativa" => 3
        ]);

        Delivery::create([
            "endereco_entrega" => "Rua dos teste, 200, São paulo - SP",
            "status" => "Em andamento",
            "nome_destinatario" => "Zezinho",
            "garagem_id" => 2,
            "armazem_id" => 1,
            "compartimento" => 2,
            "tentativa" => 2
        ]);

        Delivery::create([
            "endereco_entrega" => "AV. fulano de tal, 2175, São Bernando - SP",
            "status" => "Aguardando coleta",
            "nome_destinatario" => "Luizinho",
            "garagem_id" => 2,
            "armazem_id" => 1,
            "compartimento" => 5,
            "tentativa" => 1
        ]);
        
        Delivery::create([
            "endereco_entrega" => "Minha rua, 75, Diadema - SP",
            "status" => "Entregue",
            "nome_destinatario" => "Duck Dodgers",
            "garagem_id" => 3,
            "armazem_id" => 2,
            "compartimento" => 3,
            "tentativa" => 2
        ]);
        
        Delivery::create([
            "endereco_entrega" => "Minha rua, 75, Diadema - SP",
            "status" => "Falha",
            "nome_destinatario" => "Duck Dodgers",
            "garagem_id" => 3,
            "armazem_id" => 2,
            "compartimento" => 7,
            "tentativa" => 1
        ]);
    }
}
