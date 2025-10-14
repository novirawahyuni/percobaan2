<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomePageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Rute untuk halaman utama (Beranda)
Route::get('/', [HomePageController::class, 'index'])->name('home');

// Rute untuk halaman-halaman lainnya
Route::get('/layanan', [HomePageController::class, 'layanan'])->name('layanan');
Route::get('/tentang-kami', [HomePageController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/kontak', [HomePageController::class, 'kontak'])->name('kontak');

// Ini akan memanggil fungsi 'create' di BookingController, yang akan mengirim data layanan
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');

// Rute untuk memproses data dari form booking (POST request)
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// Rute untuk halaman sukses setelah booking
Route::get('/booking/sukses', [BookingController::class, 'success'])->name('booking.success');
