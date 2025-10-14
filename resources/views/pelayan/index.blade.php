<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami - Bengkel Berkat Yakin</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
    </style>
</head>

<body class="text-slate-800">

    <!-- HEADER / NAVBAR -->
    <header class="bg-white/80 backdrop-blur-sm shadow-md sticky top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0">
                    <a href="{{route('welcome')}}" class="text-2xl font-bold text-blue-600">Bengkel Berkat Yakin</a>
                </div>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{route('welcome')}}"
                        class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Beranda</a>
                    <a href="{{ route('pelayanan.index')}}" class="text-blue-600 font-medium transition-colors">Pelayanan</a>
                    <a href="{{ route('tentangkami.index')}}"
                        class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Tentang Kami</a>
                    <a href="kontak.html"
                        class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Kontak</a>
                </nav>
                <div class="flex items-center">
                    <a href="booking.html"
                        class="hidden sm:inline-block bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 shadow-sm hover:shadow-lg">Booking
                        Now</a>
                    <button id="hamburger-button"
                        class="md:hidden ml-4 p-2 rounded-md text-slate-600 hover:bg-slate-100 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('welcome')}}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Beranda</a>
                <a href="{{ route('pelayanan.index')}}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-blue-600 bg-slate-50">Pelayanan</a>
                <a href="{{ route('tentangkami.index')}}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Tentang
                    Kami</a>
                <a href="kontak.html"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Kontak</a>
                <a href="booking.html"
                    class="block w-full text-left bg-blue-600 text-white font-semibold mt-2 px-4 py-3 rounded-lg hover:bg-blue-700 transition-all">Booking
                    Now</a>
            </div>
        </div>
    </header>

    <main>
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
    </main>

    <!-- FOOTER -->
    <footer class="bg-slate-800 text-slate-300 pt-16 pb-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Bengkel Berkat Yakin</h3>
                    <p class="text-slate-400">Perawatan mobil Anda dengan layanan profesional, transparan, dan terpercaya.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Navigasi</h3>
                    <ul class="space-y-2">
                         <li><a href="{{route('welcome')}}" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('pelayanan.index')}}" class="hover:text-white transition-colors">Pelayanan</a></li>
                        <li><a href="{{ route('tentangkami.index')}}" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="kontak.html" class="hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Hubungi Kami</h3>
                    <ul class="space-y-3 text-slate-400">
                        <li class="flex items-start"><i data-lucide="map-pin"
                                class="w-5 h-5 mr-3 mt-1 flex-shrink-0 text-blue-400"></i>Jl. Professor Moh. Yamin SH Bangkinang - Riau</li>
                        <li class="flex items-center"><i data-lucide="phone"
                                class="w-5 h-5 mr-3 text-blue-400"></i>0821 - 7259 - 1419</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Jam Operasional</h3>
                    <ul class="space-y-2 text-slate-400">
                        <li>Senin - Rabu: 09:00 - 17:00</li>
                        <li>Kamis - Jumat: Tutup</li>
                        <li>Sabtu - Ahad: 09:00 - 17:00</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-700 mt-8 pt-8 text-center text-slate-500">
                <p>&copy; 2025 Bengkel Berkat Yakin.</p>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
        const hamburgerButton = document.getElementById('hamburger-button');
        const mobileMenu = document.getElementById('mobile-menu');
        hamburgerButton.addEventListener('click', () => { mobileMenu.classList.toggle('hidden'); });
    </script>
</body>

</html>
