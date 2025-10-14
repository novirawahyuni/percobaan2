<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Kendaraan;
use App\Models\Tipe;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user pelanggan
        $pelanggan = User::role('pelanggan')->first();
        if (!$pelanggan) {
            $this->command->error('Tidak ada user dengan role "pelanggan". Jalankan UserSeeder terlebih dahulu.');
            return;
        }

        // Ambil tipe kendaraan pertama
        $tipe = Tipe::first();
        if (!$tipe) {
            $this->command->error('Tidak ada data di tabel "tipes". Jalankan TipeSeeder terlebih dahulu.');
            return;
        }

        // Buat atau ambil kendaraan untuk pelanggan
        $kendaraan = Kendaraan::firstOrCreate(
            ['plate_number' => 'BM 1234 ABC'],
            [
                'user_id' => $pelanggan->id,
                'tipe_id' => $tipe->id,
                'model'   => 'Innova Reborn',
                'tahun'   => 2022,
            ]
        );

        // Ambil beberapa layanan secara acak
        $layananIds = \App\Models\Layanan::inRandomOrder()->limit(3)->pluck('id');

        // Buat booking pertama
        $booking1 = Booking::create([
            'booking_code' => 'BK-' . strtoupper(Str::random(8)),
            'user_id'      => $pelanggan->id,
            'kendaraan_id' => $kendaraan->id,
            'booking_date' => now()->addDays(5),
            'booking_time' => '10:00:00',
            // === BAGIAN YANG DIPERBAIKI ===
            'status'       => 'dikonfirmasi', // Menggunakan nilai yang benar (bukan 'confirmed')
            'notes'        => 'Mohon dicek juga bagian AC kurang dingin.',
        ]);
        $booking1->layanans()->attach($layananIds->slice(0, 2));


        // Buat booking kedua
        $booking2 = Booking::create([
            'booking_code' => 'BK-' . strtoupper(Str::random(8)),
            'user_id'      => $pelanggan->id,
            'kendaraan_id' => $kendaraan->id,
            'booking_date' => now()->subDays(10),
            'booking_time' => '14:00:00',
            // === BAGIAN YANG DIPERBAIKI ===
            'status'       => 'selesai', // Menggunakan nilai yang benar (bukan 'completed')
        ]);
        $booking2->layanans()->attach($layananIds->last());
    }
}
