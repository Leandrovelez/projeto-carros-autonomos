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
        //DB::table('deliveries')->truncate();

        Delivery::create([
            "endereco_entrega" => "Rua dos Bobos, 0, São paulo - SP",
            "status" => "Em rota de entrega",
            "nome_destinatario" => "Huguinho",
            "compartimento" => 1,
            "tentativa" => 3,
            'store_id' => 2,
            'car_id' => 1,
        ]);

        Delivery::create([
            "endereco_entrega" => "Rua dos teste, 200, São paulo - SP",
            "status" => "Em andamento",
            "nome_destinatario" => "Zezinho",
            "compartimento" => 2,
            "tentativa" => 2,
            'store_id' => 2,
            'car_id' => 1,
        ]);

        Delivery::create([
            "endereco_entrega" => "AV. fulano de tal, 2175, São Bernando - SP",
            "status" => "Aguardando coleta",
            "nome_destinatario" => "Luizinho",
            "compartimento" => 5,
            "tentativa" => 1,
            'store_id' => 2,
            'car_id' => 2,
        ]);
        
        Delivery::create([
            "endereco_entrega" => "Minha rua, 75, Diadema - SP",
            "status" => "Entregue",
            "nome_destinatario" => "Duck Dodgers",
            "compartimento" => 3,
            "tentativa" => 2,
            'store_id' => 4,
            'car_id' => 3,
        ]);
        
        Delivery::create([
            "endereco_entrega" => "Minha rua, 75, Diadema - SP",
            "status" => "Falha",
            "nome_destinatario" => "Duck Dodgers",
            "compartimento" => 7,
            "tentativa" => 1,
            'store_id' => 4,
            'car_id' => 4,
        ]);
    }
}
