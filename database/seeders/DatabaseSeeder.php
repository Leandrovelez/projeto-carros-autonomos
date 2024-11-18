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
        $this->call(WarehousesSeeder::class);
        $this->call(CarsSeeder::class);
        $this->call(DeliverySeeder::class);
        $this->call(GaragesSeeder::class);
        $this->call(ColletionPointsSeeder::class);

        DB::table('users')->truncate();

        User::factory()->create([
            'name' => 'Leandro velez',
            'email' => 'leandrovelez55@gmail.com',
            'tipo' => 'admin',
            'password' => bcrypt('leandrovelez55@gmail.com')
        ]);

        User::factory()->create([
            'name' => 'Huguinho',
            'email' => 'huguinho@email.com',
            'tipo' => 'dono_de_carros',
            'password' => bcrypt('123456789')
        ]);
        
        User::factory()->create([
            'name' => 'Zezinho',
            'email' => 'zezinho@email.com',
            'tipo' => 'vendedor',
            'password' => bcrypt('123456789')
        ]);
    }
}
