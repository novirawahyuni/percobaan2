<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'name' => 'Oli Mesin Shell Helix HX7 5W-40 (4L)',
            'sku' => 'SH-HX7-4L',
            'price' => 320000,
            'stock' => 50,
        ]);
        Produk::create([
            'name' => 'Filter Oli Toyota Avanza',
            'sku' => 'FO-AVZ-01',
            'price' => 45000,
            'stock' => 100,
        ]);
        Produk::create([
            'name' => 'Kampas Rem Depan Honda Brio',
            'sku' => 'KR-BRIO-D',
            'price' => 280000,
            'stock' => 30,
        ]);
    }
}
