<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_service')->insert([
            'sub_service' => 'Gratis Antar Jemput',
            'service_id' => 1
        ]);

        DB::table('sub_service')->insert([
            'sub_service' => 'Minimum 1kg',
            'service_id' => 1
        ]);

        DB::table('sub_service')->insert([
            'sub_service' => 'Harga Bertahap',
            'service_id' => 1
        ]);

        DB::table('sub_service')->insert([
            'sub_service' => 'Gratis Antar Jemput',
            'service_id' => 2
        ]);

        DB::table('sub_service')->insert([
            'sub_service' => 'Minimum 1kg',
            'service_id' => 2
        ]);

        DB::table('sub_service')->insert([
            'sub_service' => 'Harga Bertahap',
            'service_id' => 2
        ]);
    }
}
