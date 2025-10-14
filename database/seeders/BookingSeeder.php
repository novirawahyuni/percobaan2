<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Kendaraan;
use App\Models\Layanan;
use App\Models\Produk;
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
        // Ambil data user pelanggan menggunakan metode dari Spatie/Filament Shield
        // INI BAGIAN YANG DIPERBAIKI:
        $pelanggan = User::role('pelanggan')->first();

        // Jika tidak ada pelanggan, hentikan seeder untuk menghindari error
        if (!$pelanggan) {
            $this->command->info('Tidak ditemukan user dengan role pelanggan. BookingSeeder dilewati.');
            return;
        }

        $tipeToyota = Tipe::where('name', 'Toyota')->first();

        // Buat kendaraan untuk pelanggan tersebut
        $kendaraan = Kendaraan::create([
            'user_id' => $pelanggan->id,
            'tipe_id' => $tipeToyota->id,
            'model' => 'Avanza Veloz',
            'plate_number' => 'B 1234 XYZ',
            'year' => '2022',
        ]);

        // Ambil data layanan dan produk
        $layananTuneUp = Layanan::where('name', 'Tune Up Lengkap')->first();
        $layananGantiOli = Layanan::where('name', 'Ganti Oli Mesin')->first();
        $produkOli = Produk::where('sku', 'SH-HX7-4L')->first();
        $produkFilter = Produk::where('sku', 'FO-AVZ-01')->first();

        // Buat booking sampel
        $booking = Booking::create([
            'booking_code' => 'BK-' . strtoupper(Str::random(8)),
            'user_id' => $pelanggan->id,
            'kendaraan_id' => $kendaraan->id,
            'booking_date' => now()->addDays(3)->toDateString(),
            'booking_time' => '10:00:00',
            'status' => 'confirmed',
            'notes' => 'Mohon dicek juga bagian AC kurang dingin.',
        ]);

        // Hubungkan booking dengan layanan
        $booking->layanans()->attach([$layananTuneUp->id, $layananGantiOli->id]);

        // Hubungkan booking dengan produk
        $booking->produks()->attach([
            $produkOli->id => ['quantity' => 1, 'price_at_time' => $produkOli->price],
            $produkFilter->id => ['quantity' => 1, 'price_at_time' => $produkFilter->price],
        ]);

        // Hitung total biaya
        $totalLayanan = $booking->layanans()->sum('price');
        $totalProduk = $booking->produks()->sum('price_at_time');
        $totalAmount = $totalLayanan + $totalProduk;

        // Buat data pembayaran untuk booking ini
        $booking->pembayaran()->create([
            'method' => 'Bayar di Tempat',
            'amount' => $totalAmount,
            'status' => 'unpaid',
        ]);
    }
}
