<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('warehouses')->truncate();

        Warehouse::create([
            'nome' => 'Armazém Av PAulista',
            'cep' => '05588-471',
            'rua' => 'rua teste',
            'numero' => '1200',
            'bairro' => 'Bairro',
            'cidade' => 'São paulo',
            'estado' => 'São Paulo',
            'store_id' => 2,
            'is_active' => true
        ]);

        Warehouse::create([
            'nome' => 'Armazém Santos',
            'cep' => '63254-471',
            'rua' => 'rua teste',
            'numero' => '1200',
            'bairro' => 'Bairro',
            'cidade' => 'Santos',
            'estado' => 'São Paulo',
            'store_id' => 2,
            'is_active' => true
        ]);

        Warehouse::create([
            'nome' => 'Armazém grandão',
            'cep' => '05588-471',
            'rua' => 'rua teste',
            'numero' => '1200',
            'bairro' => 'Bairro',
            'cidade' => 'São paulo',
            'estado' => 'São Paulo',
            'store_id' => 4,
            'is_active' => true
        ]);
    }
}
