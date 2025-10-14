<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Layanan::create([
            'name' => 'Ganti Oli Mesin',
            'category' => 'Perawatan Rutin',
            'price' => 350000,
            'description' => 'Penggantian oli mesin sesuai standar pabrikan.'
        ]);
        Layanan::create([
            'name' => 'Tune Up Lengkap',
            'category' => 'Mesin & Performa',
            'price' => 450000,
            'description' => 'Pembersihan ruang bakar, throttle body, dan pengecekan komponen mesin.'
        ]);
        Layanan::create([
            'name' => 'Servis Rem',
            'category' => 'Kaki-kaki & Pengereman',
            'price' => 200000,
            'description' => 'Pengecekan dan pembersihan sistem pengereman.'
        ]);
        Layanan::create([
            'name' => 'Spooring & Balancing',
            'category' => 'Kaki-kaki & Pengereman',
            'price' => 250000,
            'description' => 'Penyesuaian sudut roda dan balancing ban.'
        ]);
    }
}
