<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleAndPermissionSeeder::class,
            // Panggil seeder user dan data master terlebih dahulu
            UserSeeder::class,
            TipeSeeder::class,
            LayananSeeder::class,
            ProdukSeeder::class,

            // Panggil seeder data transaksi setelahnya
            BookingSeeder::class,

            // Panggil seeder metode pembayaran
            PaymentMethodSeeder::class,
        ]);
    }
}
