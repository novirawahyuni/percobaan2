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
                    Terima kasih telah melakukan booking di Bengkel Berkat Yakin. Tim kami akan segera menghubungi Anda
                    melalui WhatsApp untuk konfirmasi lebih lanjut.
                </p>
                <a href="{{ route('home') }}"
                    class="mt-8 inline-block bg-blue-600 text-white font-semibold px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
@endsection
