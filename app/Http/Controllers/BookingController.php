<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kendaraan;
use App\Models\Layanan;
use App\Models\PaymentMethod;
use App\Models\Tipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
        $services = Layanan::all()->groupBy('category');
        $tipes = Tipe::all();

        // AMBIL DATA PEMBAYARAN YANG AKTIF DARI DATABASE
        $paymentMethods = PaymentMethod::where('is_active', true)->get()->groupBy('type');

        return view('pages.booking', [
            'servicesByCategory' => $services,
            'tipes' => $tipes,
            'paymentMethods' => $paymentMethods, // Kirim ke view
        ]);
    }

    /**
     * Menyimpan data booking baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi dasar yang berlaku untuk semua
        $validationRules = [
            'services'       => 'required|array|min:1',
            'services.*'     => 'exists:layanans,id',
            'booking_date'   => 'required|date|after_or_equal:today',
            'booking_time'   => 'required|string',
            'tipe_id'        => 'required|exists:tipes,id',
            'model'          => 'required|string|max:255', // DITAMBAHKAN: Validasi untuk model
            'nomor_polisi'   => 'required|string|max:15',
            'tahun'          => 'required|digits:4',
            'payment_method' => 'required|string',
            'payment_proof'  => 'nullable|image|max:2048',
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
                    'email' => $validated['phone'] . '@bengkel.com', // Email unik sementara
                    'password' => Hash::make(Str::random(10)),
                ]
            );
            // Tetapkan role 'pelanggan' jika user baru dibuat atau belum punya role
            if (!$user->hasRole('pelanggan')) {
                $user->assignRole('pelanggan');
            }
        }

        // Cari atau buat Kendaraan baru
        $kendaraan = Kendaraan::firstOrCreate(
            ['plate_number' => Str::upper($validated['nomor_polisi'])],
            [
                'user_id' => $user->id,
                'tipe_id' => $validated['tipe_id'],
                'model'   => $validated['model'], // DITAMBAHKAN: Menyimpan model kendaraan
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
        return redirect()->route('booking.success')->with('booking_code', $booking->booking_code);
    }
    /**
     * Menampilkan halaman konfirmasi sukses.
     */
    public function success(): RedirectResponse|View
    {
        if (!session()->has('booking_code')) {
            return redirect()->route('booking.create');
        }

        return view('pages.booking-success');
    }
}
