@extends('layouts.app')

@section('title', 'Booking Berhasil - Bengkel Berkat Yakin')

@section('content')
    <div class="bg-white py-20">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-2xl mx-auto">
                <div class="bg-green-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto">
                    <i data-lucide="check-circle-2" class="w-16 h-16 text-green-600"></i>
                </div>
                <h1 class="text-4xl font-bold mt-6">Booking Berhasil!</h1>
                <p class="mt-4 text-lg text-slate-600">
                    Terima kasih telah melakukan booking. Tim kami akan segera menghubungi Anda melalui WhatsApp untuk
                    konfirmasi lebih lanjut.
                </p>

                {{-- === BAGIAN BARU: TAMPILAN KODE BOOKING === --}}
                @if (session('booking_code'))
                    <div class="mt-8 border-2 border-dashed border-slate-300 bg-slate-50 rounded-lg p-6">
                        <p class="text-slate-600">Simpan kode booking Anda untuk melakukan pengecekan status:</p>
                        <p
                            class="text-3xl font-bold text-blue-600 tracking-widest my-2 bg-white py-3 rounded-md shadow-inner">
                            {{ session('booking_code') }}
                        </p>
                        <p class="text-sm text-slate-500">Anda dapat mengecek status booking Anda pada halaman "Riwayat
                            Booking".</p>
                    </div>
                @endif
                {{-- ========================================== --}}

                <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('history') }}"
                        class="inline-block bg-slate-200 text-slate-800 font-semibold px-8 py-3 rounded-lg hover:bg-slate-300 transition-colors">
                        Cek Status Booking
                    </a>
                    <a href="{{ route('home') }}"
                        class="inline-block bg-blue-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
