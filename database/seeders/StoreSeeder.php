<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stores')->truncate();

        Store::create([
            'name' => 'Store 1',
            'description' => 'Store 1 description',
            'address' => 'Store 1 address',
            'city' => 'Store 1 city',
            'state' => 'Store 1 state',
            'zip' => 'Store 1 zip',
            'country' => 'Store 1 country',
            'phone' => 'Store 1 phone',
            'email' => 'Store 1 email',
            'website' => 'Store 1 website',
            'status' => 'active',
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
