<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomePageController extends Controller
{
    /**
     * Menampilkan halaman Beranda (Home).
     * Mengambil beberapa layanan unggulan untuk ditampilkan.
     */
    public function index(): View
    {
        // Ambil 4 layanan secara acak sebagai layanan unggulan
        $featuredServices = Layanan::inRandomOrder()->limit(4)->get();

        return view('pages.index', [
            'featuredServices' => $featuredServices
        ]);
    }

    /**
     * Menampilkan halaman Layanan.
     * Mengambil semua data layanan dari database.
     */
    public function layanan(): View
    {
        $services = Layanan::all();

        return view('pages.layanan', [
            'services' => $services
        ]);
    }

    /**
     * Menampilkan halaman Tentang Kami.
     */
    public function tentangKami(): View
    {
        return view('pages.tentang-kami');
    }

    /**
     * Menampilkan halaman Kontak.
     */
    public function kontak(): View
    {
        return view('pages.kontak');
    }

    /**
     * Menampilkan halaman Booking.
     */
    public function booking(): View
    {
        // Nanti kita bisa tambahkan data layanan ke sini untuk ditampilkan di form
        $services = Layanan::all();
        return view('pages.booking', [
            'services' => $services
        ]);
    }
}
