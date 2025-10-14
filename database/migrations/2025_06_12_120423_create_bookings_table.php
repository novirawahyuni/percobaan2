<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_code')->unique();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('kendaraan_id')->constrained('kendaraans')->onDelete('cascade');
            $table->date('booking_date');
            $table->string('booking_time'); // Menggunakan string untuk fleksibilitas

            // === BAGIAN YANG DIPERBAIKI ===
            // Menyesuaikan nilai ENUM agar cocok dengan yang dikirim oleh Controller
            $table->enum('status', [
                'menunggu_konfirmasi',
                'dikonfirmasi',
                'sedang_dikerjakan',
                'selesai',
                'dibatalkan'
            ])->default('menunggu_konfirmasi');

            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
