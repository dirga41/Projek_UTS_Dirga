<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'code_satuan' => 'A1',
                'name_satuan' => 'Meter',
            ],
            [
                'code_satuan' => 'A2',
                'name_satuan' => 'Kilogram',
            ],
            [
                'code_satuan' => 'A3',
                'name_satuan' => 'Gram',
            ],
            [
                'code_satuan' => 'A4',
                'name_satuan' => 'Liter',
            ],
        ]);
    }
}
