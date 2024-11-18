<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->truncate();
        Car::create([
            'fabricante' => 'BMW',
            'modelo' => 'Ix3',
            'cor' => 'Preto',
            'capacidade_carga_kg' => 200,
            'qtd_compartimentos' => 10,
            'autonomia_km' => 350,
        ]);
        
        Car::create([
            'fabricante' => 'Toyota',
            'modelo' => 'Bz4X',
            'cor' => 'Preto',
            'capacidade_carga_kg' => 200,
            'qtd_compartimentos' => 10,
            'autonomia_km' => 400,
        ]);
        
        Car::create([
            'fabricante' => 'BYD',
            'modelo' => 'Dolphin',
            'cor' => 'Azul',
            'capacidade_carga_kg' => 200,
            'qtd_compartimentos' => 10,
            'autonomia_km' => 300,
        ]);
    }
}
