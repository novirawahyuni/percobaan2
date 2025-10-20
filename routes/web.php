<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// rute untuk halaman dashboard setelah login
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

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

// Rute untuk halaman riwayat booking
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('history.index');
Route::post('/history/check', [App\Http\Controllers\HistoryController::class, 'check'])->name('history.check');

// Rute untuk cek booking tanpa login
Route::get('/cek-booking', [App\Http\Controllers\BookingCheckController::class, 'index'])->name('booking.check.index');
Route::post('/cek-booking', [App\Http\Controllers\BookingCheckController::class, 'check'])->name('booking.check.submit');
