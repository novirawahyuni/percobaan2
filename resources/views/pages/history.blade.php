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

                @if (isset($bookings) && $bookings->count() > 0)
                    <div class="space-y-6">
                        <h2 class="text-3xl font-bold text-slate-800 border-b pb-4">Riwayat Booking Anda</h2>

                        @foreach ($bookings as $booking)
                            <div class="bg-white p-6 rounded-xl shadow-lg border border-slate-200 hover:border-blue-500 transition-colors">

                                {{-- Alur Status Servis --}}
                                <div class="flex flex-wrap justify-between items-center mb-8 px-4 md:px-10">
                                    @php
                                        // Daftar tahapan alur
                                        $steps = [
                                            'booking' => 'Booking',
                                            'proses' => 'Proses',
                                            'sedang_dikerjakan' => 'Sedang Dikerjakan',
                                            'selesai' => 'Selesai',
                                            'diambil' => 'Silakan Diambil',
                                        ];

                                        // Tentukan langkah aktif berdasarkan status booking
                                        $currentStepIndex = match ($booking->status) {
                                            'menunggu_konfirmasi' => 0,
                                            'dikonfirmasi' => 1,
                                            'sedang_dikerjakan' => 2,
                                            'selesai' => 3,
                                            'diambil' => 4,
                                            default => 0,
                                        };
                                    @endphp

                                    @foreach ($steps as $index => $label)
                                        @php
                                            $isActive = $loop->index <= $currentStepIndex;
                                            $circleColor = $isActive ? 'bg-green-600 text-white' : 'bg-slate-200 text-slate-500';
                                            $lineColor = $isActive ? 'bg-green-600' : 'bg-slate-300';
                                        @endphp

                                        <div class="flex flex-col items-center relative w-1/5 text-center">
                                            {{-- Garis penghubung antar lingkaran --}}
                                            @if (!$loop->first)
                                                <div class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-1/2 h-1 w-full {{ $lineColor }}"></div>
                                            @endif

                                            {{-- Lingkaran Tahapan --}}
                                            <div class="relative z-10 flex items-center justify-center w-12 h-12 rounded-full {{ $circleColor }} font-bold text-lg shadow-md">
                                                @if ($isActive)
                                                    <i class="fa-solid fa-check"></i>
                                                @else
                                                    <i class="fa-solid fa-circle"></i>
                                                @endif
                                            </div>

                                            {{-- Label Tahapan --}}
                                            <p class="mt-2 text-sm font-semibold text-slate-700">{{ $label }}</p>
                                        </div>
                                    @endforeach
                                </div>

                                {{-- Detail Booking --}}
                                <div class="flex flex-col sm:flex-row justify-between sm:items-center border-b pb-4 mb-4">
                                    <div>
                                        <p class="text-sm text-slate-500">Kode Booking</p>
                                        <p class="font-bold text-lg text-blue-600 tracking-wider">
                                            {{ $booking->booking_code }}
                                        </p>
                                    </div>
                                    <div class="mt-4 sm:mt-0 text-left sm:text-right">
                                        @php
                                            $statusClass = [
                                                'menunggu_konfirmasi' => 'bg-yellow-100 text-yellow-800',
                                                'dikonfirmasi' => 'bg-blue-100 text-blue-800',
                                                'sedang_dikerjakan' => 'bg-indigo-100 text-indigo-800',
                                                'selesai' => 'bg-green-100 text-green-800',
                                                'diambil' => 'bg-green-200 text-green-900',
                                                'dibatalkan' => 'bg-red-100 text-red-800',
                                            ][$booking->status] ?? 'bg-slate-100 text-slate-800';
                                        @endphp
                                        <span class="text-sm font-bold px-3 py-1 rounded-full {{ $statusClass }}">
                                            {{ str_replace('_', ' ', Str::title($booking->status)) }}
                                        </span>
                                    </div>
                                </div>

                                {{-- Detail Pelanggan, Kendaraan, dan Jadwal --}}
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
                                        <p class="text-slate-500 text-sm font-mono">{{ $booking->kendaraan->plate_number }}</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-slate-600 mb-1">Jadwal Servis</p>
                                        <p class="text-slate-800">
                                            {{ \Carbon\Carbon::parse($booking->booking_date)->isoFormat('dddd, D MMMM Y') }}
                                        </p>
                                        <p class="text-slate-500 text-sm">Pukul {{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</p>
                                    </div>
                                </div>

                                {{-- Layanan --}}
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
                @else
                    {{-- Jika tidak ada data booking --}}
                    <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                        <h3 class="text-xl font-bold text-red-600">Booking Tidak Ditemukan</h3>
                        <p class="text-slate-600 mt-2">Kode booking yang Anda masukkan salah atau tidak terdaftar. Silakan periksa kembali.</p>
                    </div>
                @endif

            </div>
        </section>
    </main>
@endsection

