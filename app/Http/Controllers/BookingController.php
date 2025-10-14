<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kendaraan;
use App\Models\Layanan;
use App\Models\Tipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * Menampilkan form booking dengan data yang dibutuhkan dari database.
     */
    public function create(): View
    {
        // === BAGIAN INI MEMPERBAIKI ERROR ===
        // 1. Mengambil semua data Layanan dari database.
        // 2. Mengelompokkannya berdasarkan kolom 'category'.
        $services = Layanan::all()->groupBy('category');

        // 3. Mengambil semua tipe kendaraan.
        $tipes = Tipe::all();

        // 4. Mengirim variabel $servicesByCategory dan $tipes ke view.
        return view('pages.booking', [
            'servicesByCategory' => $services,
            'tipes' => $tipes,
        ]);
    }

    /**
     * Menyimpan data booking baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi dasar yang berlaku untuk semua
        $validationRules = [
            'services'      => 'required|array|min:1',
            'services.*'    => 'exists:layanans,id',
            'booking_date'  => 'required|date|after_or_equal:today',
            'booking_time'  => 'required|string',
            'tipe_id'       => 'required|exists:tipes,id',
            'nomor_polisi'  => 'required|string|max:10',
            'tahun'         => 'required|digits:4',
            'payment_method' => 'required|string',
            'payment_proof' => 'nullable|image|max:2048',
        ];

        // Tambahkan validasi nama & telepon HANYA jika pengguna adalah guest
        if (!Auth::check()) {
            $validationRules['name'] = 'required|string|max:255';
            $validationRules['phone'] = 'required|string|max:15';
        }

        $validated = $request->validate($validationRules);

        $user = null;
        if (Auth::check()) {
            // Jika pengguna sudah login, gunakan data mereka
            $user = Auth::user();
        } else {
            // Jika guest, cari atau buat User baru
            $user = User::firstOrCreate(
                ['phone' => $validated['phone']],
                [
                    'name' => $validated['name'],
                    'email' => $validated['phone'] . '@bengkel.com',
                    'password' => Hash::make(Str::random(10)),
                ]
            );
            if (!$user->wasRecentlyCreated && !$user->hasRole('pelanggan')) {
                $user->assignRole('pelanggan');
            } else if ($user->wasRecentlyCreated) {
                $user->assignRole('pelanggan');
            }
        }

        // Cari atau buat Kendaraan baru
        $kendaraan = Kendaraan::firstOrCreate(
            ['nomor_polisi' => Str::upper($validated['nomor_polisi'])],
            [
                'user_id' => $user->id,
                'tipe_id' => $validated['tipe_id'],
                'tahun'   => $validated['tahun'],
            ]
        );

        // Buat data Booking
        $booking = Booking::create([
            'booking_code' => 'BK-' . strtoupper(Str::random(8)),
            'user_id'      => $user->id,
            'kendaraan_id' => $kendaraan->id,
            'booking_date' => $validated['booking_date'],
            'booking_time' => $validated['booking_time'],
            'status'       => 'menunggu_konfirmasi',
        ]);

        // Lampirkan layanan yang dipilih ke booking
        $booking->layanans()->attach($validated['services']);

        // Redirect ke halaman sukses
        return redirect()->route('booking.success');
    }

    /**
     * Menampilkan halaman konfirmasi sukses.
     */
    public function success(): View
    {
        return view('pages.booking-success');
    }
}
