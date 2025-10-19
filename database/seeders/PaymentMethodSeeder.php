<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMethod::create([
            'name' => 'BCA',
            'type' => 'Bank',
            'account_name' => 'Bengkel Berkat Yakin',
            'account_number' => '1234567890',
            'is_active' => true,
        ]);

        PaymentMethod::create([
            'name' => 'Mandiri',
            'type' => 'Bank',
            'account_name' => 'Bengkel Berkat Yakin',
            'account_number' => '0987654321',
            'is_active' => true,
        ]);

        PaymentMethod::create([
            'name' => 'GoPay',
            'type' => 'E-Wallet',
            'account_name' => 'Bengkel Berkat Yakin',
            'account_number' => '082172591419',
            'is_active' => true,
        ]);

        PaymentMethod::create([
            'name' => 'QRIS',
            'type' => 'QRIS',
            'account_name' => 'Bengkel Berkat Yakin',
            'logo' => 'qris-images/default-qris.png', // Contoh path, unggah gambar QRIS Anda melalui admin panel
            'is_active' => true,
        ]);
    }
}
