<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Bengkel Berkat Yakin</title>

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
                    <a href="{{ route('pelayanan.index')}}"
                        class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Pelayanan</a>
                    <a href="{{ route('tentangkami.index')}}" class="text-blue-600 font-medium transition-colors">Tentang Kami</a>
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
                <a href="{{route('welcome')}}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Beranda</a>
                <a href="{{ route('pelayanan.index')}}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Pelayanan</a>
                <a href="{{ route('tentangkami.index')}}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-blue-600 bg-slate-50">Tentang Kami</a>
                <a href="kontak.html"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Kontak</a>
                <a href="booking.html"
                    class="block w-full text-left bg-blue-600 text-white font-semibold mt-2 px-4 py-3 rounded-lg hover:bg-blue-700 transition-all">Booking
                    Now </a>
            </div>
        </div>
    </header>

    <main>
        <!-- Page Header -->
        <section class="bg-slate-700 py-16 text-white text-center">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold">Partner Terpercaya Perawatan Mobil Anda</h1>
                <p class="mt-2 text-lg text-slate-300">Mengenal lebih dekat visi, misi, dan tim profesional kami.</p>
            </div>
        </section>

        <!-- Visi & Misi -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="https://placehold.co/800x600/e2e8f0/334155?text=Visi+Kami" alt="Visi BengkelPro"
                            class="rounded-xl shadow-xl w-full">
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold mb-4">Tentang Kami</h2>
                        Bengkel <strong>Berkat Yakin</strong> merupakan usaha yang berdiri sejak tahun <strong>2004</strong> dengan tujuan memberikan layanan perawatan dan perbaikan kendaraan yang dapat dipercaya oleh masyarakat.
                    </p>Berawal dari bengkel sederhana dengan fasilitas terbatas, bengkel ini terus berkembang hingga mampu menyediakan layanan yang lebih lengkap, meliputi servis rutin, penggantian oli, perawatan komponen,
                        hingga penggantian sparepart sesuai standar kualitas. Didukung oleh tenaga mekanik yang berpengalaman lebih dari 20 tahun di bidang otomotif, setiap pekerjaan dilaksanakan dengan penuh ketelitian,
                        tanggung jawab, serta berorientasi pada keselamatan dan kepuasan pelanggan. Hingga kini, Bengkel Berkat Yakin tetap konsisten mempertahankan eksistensinya sebagai mitra terpercaya bagi pemilik kendaraan
                        melalui profesionalisme, pelayanan ramah, serta pemanfaatan peralatan yang terus diperbarui untuk memastikan performa kendaraan pelanggan tetap optimal dan aman digunakan.</p>
                    <p>
                </div>
                </div>
            </div>
        </section>

        <!-- Tim Kami -->
        <section class="py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold">Tim Profesional Kami</h2>
                    <p class="mt-4 text-lg text-slate-600 max-w-2xl mx-auto">Dipimpin oleh para ahli di bidang otomotif,
                        siap melayani Anda.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 place-items-center text-center">
  <!-- Anggota Tim 1 -->
  <div>
    <img src="https://placehold.co/400x400/334155/e2e8f0?text=Foto+Tim"
         class="w-48 h-48 rounded-full mx-auto mb-4 shadow-lg" alt="Foto Kepala Mekanik">
    <h3 class="text-xl font-bold">Nofaldi</h3>
    <p class="text-slate-500">pemilik bengkel</p>
  </div>

  <!-- Anggota Tim 2 -->
  <div>
    <img src="https://placehold.co/400x400/334155/e2e8f0?text=Foto+Tim"
         class="w-48 h-48 rounded-full mx-auto mb-4 shadow-lg" alt="Foto Spesialis Mesin">
    <h3 class="text-xl font-bold">Bayu Gunawan</h3>
    <p class="text-slate-500">Mekanik</p>
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
                    <h3 class="text-xl font-bold text-white mb-4">Jam Buka</h3>
                    <ul class="space-y-2 text-slate-400">
                        <li>Senin - Rabu: 09:00 - 17:00</li>
                        <li>Kamis - Jumat: Tutup</li>
                        <li>Sabtu - Minggu: 09:00 - 17:00</li>
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
