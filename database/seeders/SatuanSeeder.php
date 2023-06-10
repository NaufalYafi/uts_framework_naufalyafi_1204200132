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
                'kode' => 'U',
                'nama' => 'Unit',
            ],
            [
                'kode' => 'KL',
                'nama' => 'KILO',
            ],
            [
                'kode' => 'L',
                'nama' => 'Liter',
            ],
            [
                'kode' => 'G',
                'nama' => 'Gram',
            ],
        ]);
    }
}
