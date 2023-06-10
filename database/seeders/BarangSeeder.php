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
                'kode_barang' => 'BRS',
                'nama_barang' => 'BERAS',
                'deskripsi'=> 'BERAS KUALITAS',
                'harga' => 20000,
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'PR',
                'nama_barang' => 'PRINT',
                'deskripsi'=> '-',
                'harga' => 1000,
                'satuan_id' => 2
            ],
            [
                'kode_barang' => 'MG',
                'nama_barang' => 'MINYAK GORENG',
                'deskripsi'=> 'Minyak goreng siap olah per liter',
                'harga' => 14000,
                'satuan_id' => 3
            ],
            [
                'kode_barang' => 'BK',
                'nama_barang' => 'BUKU',
                'deskripsi'=> 'SIDU',
                'harga' => 5000,
                'satuan_id' => 4
            ],
        ]);
    }
}
