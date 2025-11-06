<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Berkat yakin-Perawatan dan Perbaikan Mobil</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom CSS & Konfigurasi Tailwind -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc; /* slate-50 */
        }

        /* Animasi sederhana untuk elemen saat scroll */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .text-shadow-custom {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }
    </style>
</head>
<body class="text-slate-800">

    <!-- HEADER / NAVBAR -->
    <header class="bg-white/80 backdrop-blur-sm shadow-md sticky top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-bold text-blue-600">
                        Bengkel Berkat Yakin
                    </a>
                </div>

                <!-- Navigasi Desktop -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{route('welcome')}}" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Beranda</a>
                    <a href="{{ route('pelayanan.index')}}" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Pelayanan</a>
                    <a href="{{ route('tentangkami.index')}}" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Tentang Kami</a>
                    <a href="kontak.html" class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Kontak</a>
                </nav>

                <!-- Tombol CTA & Hamburger Menu -->
                <div class="flex items-center">
                    <a href="#" class="hidden sm:inline-block bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 shadow-sm hover:shadow-lg">
                        Booking Now
                    </a>
                    <button id="hamburger-button" class="md:hidden ml-4 p-2 rounded-md text-slate-600 hover:bg-slate-100 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Beranda</a>
                <a href="{{ route('pelayanan.index')}}" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Pelayanan</a>
                <a href="{{ route('tentangkami.index')}}" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Tentang Kami</a>
                <a href="kontak.html" class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Kontak</a>
                <a href="booking.html" class="block w-full text-left bg-blue-600 text-white font-semibold mt-2 px-4 py-3 rounded-lg hover:bg-blue-700 transition-all">
                    Booking Now
                </a>
            </div>
        </div>
    </header>

    <main>
        <!-- HERO SECTION -->
        <section class="relative h-[85vh] min-h-[500px] flex items-center justify-center text-white text-center">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url({{ asset('assets/1756260059161.jpg')}});"></div>
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            <div class="relative z-10 px-4 animate-on-scroll">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-4 text-shadow-custom">Servis Mobil Profesional,<br>Solusi Tepat untuk Kendaraan Anda.</h1>
                <p class="text-lg md:text-xl max-w-3xl mx-auto mb-8 text-slate-200 text-shadow-custom">Percayakan perawatan mobil Anda pada Bengkel Berkat Yakin, dengan pelayanan cepat, terpercaya, dan ditangani oleh mekanik ahli.</p>
                <a href="#" class="bg-blue-600 text-white font-bold text-lg px-8 py-4 rounded-lg hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 inline-flex items-center">
                    Booking Servis Sekarang
                    <i data-lucide="arrow-right" class="w-5 h-5 ml-2"></i>
                </a>
            </div>
        </section>

        <!-- LAYANAN UNGGULAN -->
        <section id="layanan" class="py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 animate-on-scroll">
                    <h2 class="text-3xl md:text-4xl font-bold">Layanan Unggulan Kami</h2>
                    <p class="mt-4 text-lg text-slate-600 max-w-2xl mx-auto">Kami menyediakan solusi untuk semua kebutuhan perawatan mobil Anda.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Card 1: Servis Berkala -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 text-center animate-on-scroll">
                        <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                             <i data-lucide="calendar-check-2" class="w-10 h-10 text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Servis Oli Mobil</h3>
                        <p class="text-slate-600">
                        <ul><li>Ganti Oli Mesin</li>
                        <li>Ganti Oli Gardan</li>
                        <li>Ganti Oli Persneling</li></ul>
                    </p>
                    </div>
                    <!-- Card 2: Servis Filter Mobil -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 text-center animate-on-scroll" style="transition-delay: 100ms;">
                        <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                             <i data-lucide="wrench" class="w-10 h-10 text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Servis Filter Mobil</h3>
                        <p class="text-slate-600"><ul>
                        <li>Filter Oli</li>
                        <li>Filter Udara</li>
                        <li>Filter Solar</li></ul>
                    </p>
                    </div>
                    <!-- Card 3: Perawatan Komponen -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 text-center animate-on-scroll" style="transition-delay: 200ms;">
                        <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                             <i data-lucide="snowflake" class="w-10 h-10 text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Perawatan Komponen</h3>
                        <p class="text-slate-600"> <ul>
                        <li>Air Radiator</li>
                        <li>Air Aki/Pengisian</li>
                        <li>Grease/Pelumasan</li></ul>
                    </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- MENGAPA MEMILIH KAMI -->
        <section id="mengapa-kami" class="py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="animate-on-scroll">
                        <img src="https://placehold.co/800x600/334155/e2e8f0?text=Tim+Mekanik+Handal" alt="Tim Mekanik BengkelPro" class="rounded-xl shadow-xl w-full">
                    </div>
                    <div class="animate-on-scroll">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Kenapa BengkelPro Pilihan Terbaik?</h2>
                        <p class="text-slate-600 mb-8">Kami bukan sekadar bengkel biasa. Kami adalah partner terpercaya Anda dalam merawat aset berharga Anda. Dengan teknologi dan pelayanan terbaik, kami memberikan pengalaman servis yang berbeda.</p>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-full p-3">
                                    <i data-lucide="award" class="w-6 h-6"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Mekanik Profesional</h4>
                                    <p class="text-slate-600">Tim kami terdiri dari mekanik berpengalaman dan bersertifikat.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-full p-3">
                                    <i data-lucide="shield-check" class="w-6 h-6"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Suku Cadang Asli</h4>
                                    <p class="text-slate-600">Kami hanya menggunakan suku cadang berkualitas dan bergaransi.</p>
                                </div>
                            </div>
                             <div class="flex items-start">
                                <div class="flex-shrink-0 bg-blue-100 text-blue-600 rounded-full p-3">
                                    <i data-lucide="bar-chart-3" class="w-6 h-6"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold">Laporan Transparan</h4>
                                    <p class="text-slate-600">Dapatkan laporan digital lengkap setelah servis selesai.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TESTIMONI -->
        <section class="py-20">
             <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 animate-on-scroll">
                    <h2 class="text-3xl md:text-4xl font-bold">Apa Kata Pelanggan Kami</h2>
                    <p class="mt-4 text-lg text-slate-600">Kepuasan Anda adalah prioritas utama kami.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimoni 1 -->
                    <div class="bg-white p-8 rounded-xl shadow-lg animate-on-scroll">
                        <p class="text-slate-600 mb-6">"Pelayanannya cepat dan transparan. Saya bisa booking dari rumah dan dapat update pengerjaan. Sangat modern dan profesional!"</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://placehold.co/100x100/e2e8f0/334155?text=A" alt="Avatar A">
                            <div>
                                <p class="font-bold">Andi Wijaya</p>
                                <p class="text-sm text-slate-500">Pengguna Honda CR-V</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni 2 -->
                    <div class="bg-white p-8 rounded-xl shadow-lg animate-on-scroll" style="transition-delay: 150ms;">
                        <p class="text-slate-600 mb-6">"Akhirnya ada bengkel yang mengerti kebutuhan zaman sekarang. Fitur riwayat servis digitalnya sangat membantu saya melacak kesehatan mobil."</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://placehold.co/100x100/e2e8f0/334155?text=B" alt="Avatar B">
                            <div>
                                <p class="font-bold">Bunga Citra</p>
                                <p class="text-sm text-slate-500">Pengguna Toyota Innova</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimoni 3 -->
                    <div class="bg-white p-8 rounded-xl shadow-lg animate-on-scroll" style="transition-delay: 300ms;">
                        <p class="text-slate-600 mb-6">"Mekaniknya handal dan bisa menjelaskan masalah mobil dengan bahasa yang mudah dimengerti. Harganya juga kompetitif. Recommended!"</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://placehold.co/100x100/e2e8f0/334155?text=C" alt="Avatar C">
                            <div>
                                <p class="font-bold">Charlie Dharma</p>
                                <p class="text-sm text-slate-500">Pengguna Mitsubishi Pajero</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer id="kontak" class="bg-slate-800 text-slate-300 pt-16 pb-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Kolom 1: Tentang -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Bengkel Berkat Yakin</h3>
                    <p class="text-slate-400">Perawatan mobil Anda dengan layanan profesional, transparan, dan terpercaya.</p>
                </div>
                <!-- Kolom 2: Link Cepat -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Navigasi</h3>
                    <ul class="space-y-2">
                         <li><a href="{{route('welcome')}}" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('pelayanan.index')}}" class="hover:text-white transition-colors">Layanan</a></li>
                        <li><a href="{{ route('tentangkami.index')}}" class="hover:text-white transition-colors">Tentang Kami</a></li>
                    </ul>
                </div>
                <!-- Kolom 3: Kontak -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Hubungi Kami</h3>
                    <ul class="space-y-3 text-slate-400">
                        <li class="flex items-start"><i data-lucide="map-pin" class="w-5 h-5 mr-3 mt-1 flex-shrink-0 text-blue-400"></i>Jl. Professor Moh. Yamin SH Bangkinang - Riau</li>
                        <li class="flex items-center"><i data-lucide="phone" class="w-5 h-5 mr-3 text-blue-400"></i>0821 - 7259 - 1419</li>
                    </ul>
                </div>
                <!-- Kolom 4: Jam Operasional -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Jam Operasional</h3>
                    <ul class="space-y-2 text-slate-400">

                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-700 mt-8 pt-8 text-center text-slate-500">
                <p>&copy; 2025 Bengkel Berkat Yakin.</p>
            </div>
        </div>
    </footer>


    <script>
        // Inisialisasi Lucide Icons
        lucide.createIcons();

        // Script untuk Hamburger Menu
        const hamburgerButton = document.getElementById('hamburger-button');
        const mobileMenu = document.getElementById('mobile-menu');

        hamburgerButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Script untuk animasi saat scroll
        const scrollElements = document.querySelectorAll(".animate-on-scroll");

        const elementInView = (el, dividend = 1) => {
            const elementTop = el.getBoundingClientRect().top;
            return (
                elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend
            );
        };

        const displayScrollElement = (element) => {
            element.classList.add("is-visible");
        };

        const hideScrollElement = (element) => {
            element.classList.remove("is-visible");
        };

        const handleScrollAnimation = () => {
            scrollElements.forEach((el) => {
                if (elementInView(el, 1.25)) {
                    displayScrollElement(el);
                }
            });
        }

        window.addEventListener("scroll", () => {
            handleScrollAnimation();
        });

        // Panggil sekali saat load untuk elemen yang sudah terlihat
        handleScrollAnimation();

    </script>
</body>
</html>

