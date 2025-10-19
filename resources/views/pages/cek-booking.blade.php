@extends('layouts.app')

@section('title', 'Cek Status Booking - Bengkel Berkat Yakin')

@section('content')
    <main>
        <!-- Page Header -->
        <section class="bg-slate-700 py-16 text-white text-center">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold">Cek Status Booking</h1>
                <p class="mt-2 text-lg text-slate-300">Lacak status pengerjaan servis mobil Anda secara real-time.</p>
            </div>
        </section>

        <!-- Form & Hasil Pencarian -->
        <section class="py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-3xl">

                {{-- Form Pencarian --}}
                <div class="bg-white p-8 rounded-xl shadow-lg mb-12">
                    <h2 class="text-2xl font-bold mb-4">Masukkan Kode Booking Anda</h2>
                    <p class="text-slate-600 mb-6">Silakan masukkan Kode Booking yang Anda terima pada struk digital setelah
                        berhasil melakukan pemesanan.</p>

                    <form action="{{ route('booking.check.submit') }}" method="POST">
                        @csrf
                        <div class="flex flex-col sm:flex-row gap-4">
                            <input type="text" name="booking_code"
                                value="{{ isset($booking) ? $booking->booking_code : old('booking_code') }}"
                                placeholder="Contoh: BK-XYZ12345" required
                                class="flex-grow w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-shadow">
                            <button type="submit"
                                class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors shadow-sm hover:shadow-lg">
                                Lacak Pesanan
                            </button>
                        </div>
                        @error('booking_code')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </form>
                </div>

                {{-- Hasil Pencarian ditampilkan jika variabel $booking ada --}}
                @if (isset($booking))
                    <div class="bg-white p-6 rounded-xl shadow-lg border border-slate-200 animate-fade-in">
                        <h3 class="text-2xl font-bold mb-6 text-center">Detail Booking Anda</h3>
                        <div class="flex flex-col sm:flex-row justify-between sm:items-center border-b pb-4 mb-4">
                            <div>
                                <p class="text-sm text-slate-500">Kode Booking</p>
                                <p class="font-bold text-lg text-blue-600 tracking-wider">{{ $booking->booking_code }}</p>
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
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="text-sm font-semibold text-slate-600 mb-1">Jadwal Servis</p>
                                <p class="text-slate-800">
                                    {{ \Carbon\Carbon::parse($booking->booking_date)->isoFormat('dddd, D MMMM Y') }}</p>
                                <p class="text-slate-500 text-sm">Pukul
                                    {{ \Carbon\Carbon::parse($booking->booking_time)->format('H:i') }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-slate-600 mb-1">Detail Kendaraan</p>
                                <p class="text-slate-800">{{ $booking->kendaraan->tipe->name }}
                                    {{ $booking->kendaraan->model }} ({{ $booking->kendaraan->tahun }})</p>
                                <p class="text-slate-500 text-sm font-mono">{{ $booking->kendaraan->plate_number }}</p>
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
                    {{-- Kondisi ini akan ditampilkan jika user mengirim form tapi booking tidak ditemukan --}}
                @elseif(request()->isMethod('post') && !isset($booking) && !$errors->any())
                    <div class="bg-white p-8 rounded-xl shadow-lg text-center">
                        <h3 class="text-xl font-bold text-red-600">Booking Tidak Ditemukan</h3>
                        <p class="text-slate-600 mt-2">Kode booking yang Anda masukkan salah atau tidak terdaftar. Silakan
                            periksa kembali.</p>
                    </div>
                @endif

            </div>
        </section>
    </main>
@endsection
