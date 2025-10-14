<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HistoryController extends Controller
{
    /**
     * Menampilkan halaman riwayat.
     * Jika user login, tampilkan semua riwayatnya.
     * Jika guest, tampilkan form pencarian.
     */
    public function index(): View
    {
        $bookings = null;

        // Cek jika pengguna sudah login
        if (Auth::check()) {
            // Ambil semua booking milik user yang sedang login, diurutkan dari yang terbaru
            $bookings = Booking::where('user_id', Auth::id())
                ->with('kendaraan', 'layanans') // Eager loading untuk performa
                ->latest() // Urutkan dari yang terbaru
                ->get();
        }

        // Tampilkan view 'history' dan kirim data booking jika ada
        return view('pages.history', ['bookings' => $bookings]);
    }

    /**
     * Mencari dan menampilkan satu booking berdasarkan kode untuk guest.
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

        // Cari booking berdasarkan kode yang divalidasi
        $booking = Booking::where('booking_code', $validated['booking_code'])
            ->with('kendaraan', 'layanans')
            ->first();

        // Kembali ke halaman history dengan data booking yang ditemukan (sebagai koleksi)
        // atau dengan error jika tidak ditemukan (sudah ditangani oleh validasi 'exists')
        return view('pages.history', ['bookings' => collect([$booking])]);
    }
}
