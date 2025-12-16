<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Barang::create([
        //     'nama_barang' => 'Parfum',
        //     'kode_barang' => 'frm_123',
        //     'stok' => 10,
        //     'kategori' => 'lainnya'
        // ]);

        Barang::factory()->count(100)->create();
        
    }
}
