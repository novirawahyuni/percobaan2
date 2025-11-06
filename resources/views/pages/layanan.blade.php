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
                        <h3 class="text-xl font-bold mb-2">Ganti Oli Mesin</h3>
                        <p class="text-slate-600">Menggunakan oli berkualitas tinggi untuk memastikan mesin awet dan
                            bertenaga.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="droplets" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Ganti Oli Gardan</h3>
                        <p class="text-slate-600">Proses mengeluarkan oli bekas dari gearbox kendaraan, lalu mengisinya kembali dengan oli gardan baru.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="battery-charging" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Ganti Oli Persneling</h3>
                        <p class="text-slate-600">Penggantian Oli pelumas pada sistem transmisi kendaraan.</p>
                    </div>
                </div>
            </div>

            <!-- Kategori 2: Penggantian Filter -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8 text-center">Penggantian Filter</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="wrench" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Filter Oli</h3>
                        <p class="text-slate-600">Pelumasan mesin yang menyaring kotoran dan partikel logam dari oli sebelumnya.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="settings-2" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Filter Solar</h3>
                        <p class="text-slate-600">Mesin diesel yang menyaring kotoran dan air dari bahan bakar solar sebelum masuk ke ruang bakar.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="filter" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Filter Hawa/Udara</h3>
                        <p class="text-slate-600">Menyaring udara dari kotoran, debu, dan partikel lain agar udara yang masuk ke ruang bakar mesin atau ruangan bersih.</p>
                    </div>
                </div>
            </div>

            <!-- Kategori 3: Komponen -->
            <div>
                <h2 class="text-3xl font-bold mb-8 text-center">Komponen</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="disc-3" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Air Radiator</h3>
                        <p class="text-slate-600">Menjaga suhu mesin kendaraan agar tetap stabil dan mencegah overheat.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="circle-dot" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Gomok</h3>
                        <p class="text-slate-600">Pelumas berbentuk semi-padat yang terbuat dari campuran minyak dan zat pengental.</p>
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <i data-lucide="move-vertical" class="w-10 h-10 text-blue-600 mb-4"></i>
                        <h3 class="text-xl font-bold mb-2">Air Aki Lunak dan Keras</h3>
                        <p class="text-slate-600">elektrolit asam sulfat murni untuk pengisian pertama aki dan yang telah disuling menambah volume cairan aki yang sudah elektrolit.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
