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
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Contoh: BCA, GoPay, QRIS
            $table->enum('type', ['Bank', 'E-Wallet', 'QRIS']);
            $table->string('account_name')->nullable(); // Contoh: Bengkel Berkat Yakin
            $table->string('account_number')->nullable(); // Contoh: 1234567890 atau nomor telepon
            $table->string('logo')->nullable(); // Path untuk menyimpan gambar logo/QR Code
            $table->boolean('is_active')->default(true);
            $table->text('instructions')->nullable(); // Instruksi tambahan jika ada
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_methods');
    }
};
