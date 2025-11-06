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
            'duration_minutes' => 30,
            'description' => 'Penggantian oli mesin sesuai standar pabrikan.'
        ]);
        Layanan::create([
            'name' => 'Filter Oli',
            'category' => 'Penggantian Filter',
            'price' => 450000,
            'duration_minutes' => 60,
            'description' => 'Komponen penting yang menyaring kotoran untuk menjaga oli tetap bersih.'
        ]);
        Layanan::create([
            'name' => 'Air Radiator',
            'category' => 'Tambahan Komponen',
            'price' => 200000,
            'duration_minutes' => 45,
            'description' => 'cairan khusus untuk pendingin mesin mencegah overheat fengan menyerap panas dan mengalirkan ke luar.'
        ]);
    }
}
