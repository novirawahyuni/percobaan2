<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_code',
        'user_id',
        'kendaraan_id',
        'booking_date',
        'booking_time',
        'status',
        'notes',
    ];

    /**
     * Relasi ke User (pelanggan).
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke Kendaraan.
     */
    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class);
    }

    /**
     * Relasi ke Pembayaran.
     */
    public function pembayaran(): HasOne
    {
        return $this->hasOne(Pembayaran::class);
    }

    /**
     * Relasi Many-to-Many ke Layanan.
     * INI BAGIAN PENTING YANG DIPERBAIKI: Menggunakan belongsToMany
     */
    public function layanans(): BelongsToMany
    {
        return $this->belongsToMany(Layanan::class, 'booking_layanan');
    }

    /**
     * Relasi Many-to-Many ke Produk.
     * INI BAGIAN PENTING YANG DIPERBAIKI: Menggunakan belongsToMany
     */
    public function produks(): BelongsToMany
    {
        return $this->belongsToMany(Produk::class, 'booking_produk')
            ->withPivot('quantity', 'price_at_time') // Mengambil data tambahan dari tabel pivot
            ->withTimestamps();
    }
}
