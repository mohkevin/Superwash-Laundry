<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service')->insert([
            'service' => 'Cuci Kering Lipat',
            'price' => 5000,
            'laundry_id' => 1
        ]);

        DB::table('service')->insert([
            'service' => 'Cuci Setrika',
            'price' => 7000,
            'laundry_id' => 1
        ]);
    }
}
