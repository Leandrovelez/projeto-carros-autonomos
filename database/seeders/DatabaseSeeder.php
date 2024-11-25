<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //DB::table('users')->truncate();

        // User::factory()->create([
        //     'name' => 'Leandro velez',
        //     'email' => 'leandrovelez55@gmail.com',
        //     'tipo' => 'admin',
        //     'password' => bcrypt('leandrovelez55@gmail.com')
        // ]);
        
        // User::factory()->create([
        //     'name' => 'Mercado Livre',
        //     'email' => 'contato@mercadolivre.com',
        //     'tipo' => 'vendedor',
        //     'document' => '69.894.992/0001-44',
        //     'password' => bcrypt('123456789')
        // ]);

        // User::factory()->create([
        //     'name' => 'Huguinho',
        //     'email' => 'huguinho@email.com',
        //     'tipo' => 'dono_de_carros',
        //     'document' => '89.522.327/0001-37',
        //     'password' => bcrypt('123456789')
        // ]);
        
        // User::factory()->create([
        //     'name' => 'Shopee',
        //     'email' => 'loja@shopee.com',
        //     'tipo' => 'vendedor',
        //     'document' => '71.777.375/0001-00',
        //     'password' => bcrypt('123456789')
        // ]);

        $this->call(WarehousesSeeder::class);
        $this->call(CarsSeeder::class);
        $this->call(DeliverySeeder::class);
        $this->call(GaragesSeeder::class);
        $this->call(ColletionPointsSeeder::class);
        $this->call(OccurencieSeeder::class);
    }
}
