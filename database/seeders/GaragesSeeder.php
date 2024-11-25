<?php

namespace Database\Seeders;

use App\Models\Garage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaragesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('garages')->truncate();

        Garage::create([
            'nome' => 'Garagem Av PAulista',
            'cep' => '05588-471',
            'rua' => 'rua teste',
            'numero' => '1200',
            'bairro' => 'Bairro',
            'cidade' => 'São paulo',
            'estado' => 'São Paulo',
            'capacidade' => 100,
            'is_active' => true,
            'dono_id' => 3,
        ]);

        Garage::create([
            'nome' => 'Garagem Santos',
            'cep' => '63254-471',
            'rua' => 'rua teste',
            'numero' => '1200',
            'bairro' => 'Bairro',
            'cidade' => 'Santos',
            'estado' => 'São Paulo',
            'capacidade' => 50,
            'is_active' => true,
            'dono_id' => 3,
        ]);

        Garage::create([
            'nome' => 'Garagem grandona',
            'cep' => '05588-471',
            'rua' => 'rua teste',
            'numero' => '1200',
            'bairro' => 'Bairro',
            'cidade' => 'São paulo',
            'estado' => 'São Paulo',
            'capacidade' => 200,
            'is_active' => true,
            'dono_id' => 3,
        ]);
    }
}
