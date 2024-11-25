<?php

namespace Database\Seeders;

use App\Models\ColletionPoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColletionPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('colletion_points')->truncate();
        ColletionPoint::create([
            'nome' => 'Ponto Av PAulista',
            'cep' => '05588-471',
            'rua' => 'rua teste',
            'numero' => '1200',
            'bairro' => 'Bairro',
            'cidade' => 'São paulo',
            'estado' => 'São Paulo',
            'nome_responsavel' => "Donald",
            'is_active' => true,
            'store_id' => 2,
        ]);

        ColletionPoint::create([
            'nome' => 'Ponto Santos',
            'cep' => '63254-471',
            'rua' => 'rua teste',
            'numero' => '1200',
            'bairro' => 'Bairro',
            'cidade' => 'Santos',
            'estado' => 'São Paulo',
            'nome_responsavel' => "Tio Patinhas",
            'is_active' => true,
            'store_id' => 2,
        ]);

        ColletionPoint::create([
            'nome' => 'Ponto de coleta famoso',
            'cep' => '05588-471',
            'rua' => 'rua teste',
            'numero' => '1200',
            'bairro' => 'Bairro',
            'cidade' => 'São paulo',
            'estado' => 'São Paulo',
            'nome_responsavel' => "Duck Dogers",
            'is_active' => true,
            'store_id' => 4,
        ]);
    }
}
