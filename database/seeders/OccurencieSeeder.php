<?php

namespace Database\Seeders;

use App\Models\Occurencie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccurencieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('occurencies')->truncate();

        Occurencie::create([
            'endereco' => 'rua dos bobos, 0, São Paulo - SP',
            'tipo' => 'Tentativa de arrombamento',
            'entrega_id' => 1,
            'compartimento' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Occurencie::create([
            'endereco' => 'rua dos teste, 220, São Caetano - SP',
            'tipo' => 'Falha no compartimento',
            'entrega_id' => 5,
            'compartimento' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
