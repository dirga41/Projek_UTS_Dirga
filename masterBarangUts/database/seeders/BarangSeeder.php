<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'code_barang' => 'M1',
                'name_barang' => 'Samyang',
                'harga_barang'=> '15000',
                'deskripsi_barang' => 'Mie Pedas',
                'satuan_id' => 1
            ],
            [
                'code_barang' => 'M2',
                'name_barang' => '',
                'harga_barang'=> '20000',
                'deskripsi_barang' => 'Impor china',
                'satuan_id' => 2
            ],
            [
                'code_barang' => 'A3',
                'name_barang' => 'Gula',
                'harga_barang'=> '5000',
                'deskripsi_barang' => 'Impor china',
                'satuan_id' => 3
            ],
            [
                'code_barang' => 'A4',
                'name_barang' => 'Minyak',
                'harga_barang'=> '15000',
                'deskripsi_barang' => 'Minyak sawit',
                'satuan_id' => 4
            ],
        ]);
    }
}
