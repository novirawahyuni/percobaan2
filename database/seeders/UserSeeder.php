<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat user dan memberinya role 'pemilik'
        // User ini dapat mengakses panel admin.
        $pemilik = User::create([
            'name' => 'Pemilik Bengkel',
            'phone_number' => '081234567890',
            'email' => 'pemilik@bengkel.com',
            'password' => Hash::make('password'),
        ]);
        $pemilik->assignRole('pemilik');

        // Membuat user dan memberinya role 'pelanggan'
        // User ini TIDAK dapat mengakses panel admin.
        $pelanggan = User::create([
            'name' => 'Budi Pelanggan',
            'phone_number' => '081234567892',
            'email' => 'budi@pelanggan.com',
            'password' => Hash::make('password'),
        ]);
        $pelanggan->assignRole('pelanggan');
    }
}
