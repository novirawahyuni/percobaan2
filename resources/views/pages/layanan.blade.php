@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <section class="bg-slate-700 py-16 text-white text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Layanan Profesional Kami</h1>
            <p class="mt-2 text-lg text-slate-300">Solusi lengkap untuk performa terbaik mobil Anda.</p>
        </div>
    </section>

    <!-- Daftar Layanan -->
    <section class="py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Kategori 1: Perawatan Rutin -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8 text-center">Perawatan Rutin</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="calendar-check-2" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Servis Berkala</h3>
                        <p class="text-slate-600">Perawatan rutin sesuai interval kilometer untuk menjaga garansi
                            dan performa mobil.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="droplets" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Ganti Oli Mesin</h3>
                        <p class="text-slate-600">Menggunakan oli berkualitas tinggi untuk memastikan mesin awet dan
                            bertenaga.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="battery-charging" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Pengecekan Aki</h3>
                        <p class="text-slate-600">Memeriksa dan memastikan sistem kelistrikan dan aki mobil Anda
                            dalam kondisi prima.</p>
                    </div>
                </div>
            </div>

            <!-- Kategori 2: Mesin & Performa -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8 text-center">Mesin & Performa</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="wrench" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Tune Up</h3>
                        <p class="text-slate-600">Mengembalikan performa mesin ke kondisi optimal, lebih responsif
                            dan irit BBM.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="settings-2" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Overhaul Mesin</h3>
                        <p class="text-slate-600">Perbaikan besar untuk mengatasi masalah serius pada komponen
                            internal mesin.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="filter" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Servis Sistem Injeksi</h3>
                        <p class="text-slate-600">Membersihkan dan menyeimbangkan sistem injeksi untuk pembakaran
                            sempurna.</p>
                    </div>
                </div>
            </div>

            <!-- Kategori 3: Kaki-kaki & Pengereman -->
            <div>
                <h2 class="text-3xl font-bold mb-8 text-center">Kaki-kaki & Pengereman</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="disc-3" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Spooring & Balancing</h3>
                        <p class="text-slate-600">Meluruskan posisi roda dan menyeimbangkan putarannya untuk
                            kenyamanan.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="circle-dot" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Servis Rem</h3>
                        <p class="text-slate-600">Pengecekan dan penggantian kampas rem untuk menjamin keamanan
                            berkendara.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="move-vertical" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Perbaikan Suspensi</h3>
                        <p class="text-slate-600">Mengatasi masalah pada shock absorber dan komponen suspensi
                            lainnya.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
