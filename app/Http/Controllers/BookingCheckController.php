<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookingCheckController extends Controller
{
    /**
     * Menampilkan form untuk cek booking.
     */
    public function index(): View
    {
        return view('pages.cek-booking');
    }

    /**
     * Memproses form dan mencari booking berdasarkan kode.
     */
    public function check(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'booking_code' => 'required|string|exists:bookings,booking_code',
        ], [
            'booking_code.required' => 'Kode booking wajib diisi.',
            'booking_code.exists'   => 'Kode booking tidak ditemukan. Pastikan kode sudah benar.',
        ]);

        // Cari booking berdasarkan kode yang valid
        $booking = Booking::where('booking_code', $validated['booking_code'])
            ->with('kendaraan.tipe', 'layanans') // Eager load relasi untuk performa
            ->first();

        // Kembali ke view yang sama dengan membawa data booking
        return view('pages.cek-booking', ['booking' => $booking]);
    }
}
