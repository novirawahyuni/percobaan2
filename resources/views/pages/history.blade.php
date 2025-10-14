{{-- Menggunakan layout utama --}}
@extends('layouts.app')

@section('title', 'Riwayat Booking - Bengkel Berkat Yakin')

@section('content')
    <main>
        <!-- Page Header -->
        <section class="bg-slate-700 py-16 text-white text-center">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold">Riwayat & Status Booking</h1>
                <p class="mt-2 text-lg text-slate-300">Lacak status servis Anda atau lihat riwayat lengkap di sini.</p>
            </div>
        </section>

        <!-- Konten Utama -->
        <section class="py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">

                @guest
                    {{-- Tampilan untuk Guest (Form Pencarian) --}}
                    <div class="bg-white p-8 rounded-xl shadow-lg mb-12">
                        <h2 class="text-2xl font-bold mb-4">Cek Status Booking Anda</h2>
                        <p class="text-slate-600 mb-6">Silakan masukkan Kode Booking yang Anda terima setelah berhasil melakukan
                            pemesanan untuk melihat status pengerjaan.</p>

                        <form action="{{ route('history.check') }}" method="POST">
                            @csrf
                            <div class="flex flex-col sm:flex-row gap-4">
                                <input type="text" name="booking_code" placeholder="Contoh: BK-XYZ12345" required
                                    class="flex-grow w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-shadow">
                                <button type="submit"
                                    class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors shadow-sm hover:shadow-lg">
                                    Cek Status
                                </button>
                            </div>
                            @error('booking_code')
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </form>
                    </div>
                @endguest

                @if (isset($bookings) && $bookings->count() > 0)
                    {{-- Tampilan Hasil Pencarian atau Riwayat untuk User Login --}}
                    <div class="space-y-6">
                        @auth
                            <h2 class="text-3xl font-bold text-slate-800 border-b pb-4">Riwayat Booking Anda</h2>
                        @endauth

                        @foreach ($bookings as $booking)
                            <div
                                class="bg-white p-6 rounded-xl shadow-lg border border-slate-200 hover:border-blue-500 transition-colors">
                                <div class="flex flex-col sm:flex-row justify-between sm:items-center border-b pb-4 mb-4">
                                    <div>
                                        <p class="text-sm text-slate-500">Kode Booking</p>
                                        <p class="font-bold text-lg text-blue-600 tracking-wider">
                                            {{ $booking->booking_code }}</p>
                                    </div>
                                    <div class="mt-4 sm:mt-0 text-left sm:text-right">
                                        @php
                                            $statusClass =
                                                [
                                                    'menunggu_konfirmasi' => 'bg-yellow-100 text-yellow-800',
                                                    'dikonfirmasi' => 'bg-blue-100 text-blue-800',
                                                    'sedang_dikerjakan' => 'bg-indigo-100 text-indigo-800',
                                                    'selesai' => 'bg-green-100 text-green-800',
                                                    'dibatalkan' => 'bg-red-100 text-red-800',
                                                ][$booking->status] ?? 'bg-slate-100 text-slate-800';
                                        @endphp
                                        <span class="text-sm font-bold px-3 py-1 rounded-full {{ $statusClass }}">
                                            {{ str_replace('_', ' ', Str::title($booking->status)) }}
                                        </span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div>
                                        <p class="text-sm font-semibold text-slate-600 mb-1">Detail Pelanggan</p>
                                        <p class="text-slate-800">{{ $booking->user->name }}</p>
                                        <p class="text-slate-500 text-sm">{{ $booking->user->phone }}</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-slate-600 mb-1">Detail Kendaraan</p>
                                        <p class="text-slate-800">{{ $booking->kendaraan->tipe->name }}
                                            {{ $booking->kendaraan->model }} ({{ $booking->kendaraan->tahun }})</p>
                                        <p class="text-slate-500 text-sm font-mono">{{ $booking->kendaraan->plate_number }}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-slate-600 mb-1">Jadwal Servis</p>
                                        <p class="text-slate-800">
                                            {{ \Carbon\Carbon::parse($booking->booking_date)->isoFormat('dddd, D MMMM Y') }}
                                        </p>
                                        <p class="text-slate-500 text-sm">Pukul
                                            {{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</p>
                                    </div>
                                </div>
                                <div class="border-t mt-6 pt-4">
                                    <p class="text-sm font-semibold text-slate-600 mb-2">Layanan yang Dipesan:</p>
                                    <ul class="list-disc list-inside text-slate-700 space-y-1">
                                        @forelse ($booking->layanans as $layanan)
                                            <li>{{ $layanan->name }}</li>
                                        @empty
                                            <li>Tidak ada layanan spesifik.</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @elseif(request()->isMethod('post'))
                    {{-- Tampilan jika guest mencari dan tidak ditemukan --}}
                    <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                        <h3 class="text-xl font-bold text-red-600">Booking Tidak Ditemukan</h3>
                        <p class="text-slate-600 mt-2">Kode booking yang Anda masukkan salah atau tidak terdaftar. Silakan
                            periksa kembali.</p>
                    </div>
                @endif

                @auth
                    @if (!isset($bookings) || $bookings->count() === 0)
                        {{-- Tampilan jika user login tapi belum punya riwayat --}}
                        <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                            <h3 class="text-xl font-bold">Anda Belum Memiliki Riwayat Booking</h3>
                            <p class="text-slate-600 mt-2">Sepertinya Anda belum pernah melakukan pemesanan. Lakukan booking
                                pertama Anda sekarang!</p>
                            <a href="{{ route('booking.create') }}"
                                class="mt-6 inline-block bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors shadow-sm hover:shadow-lg">
                                Booking Sekarang
                            </a>
                        </div>
                    @endif
                @endauth

            </div>
        </section>
    </main>
@endsection
