<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laundry')->insert([
            'laundry' => 'Laundry Kiloan',
            'type' => 'kiloan'
        ]);

        DB::table('laundry')->insert([
            'laundry' => 'Dry Cleaning',
            'type' => 'dry cleaning'
        ]);
    }
}
