<!-- HEADER / NAVBAR -->
<header class="bg-white/80 backdrop-blur-sm shadow-md sticky top-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                    Bengkel Berkat Yakin
                </a>
            </div>

            <!-- Navigasi Desktop -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}"
                    class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Beranda</a>
                <a href="{{ route('layanan') }}"
                    class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Layanan</a>
                <a href="{{ route('tentang-kami') }}"
                    class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Tentang Kami</a>
                <a href="{{ route('kontak') }}"
                    class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Kontak</a>
                {{-- === LINK BARU DITAMBAHKAN === --}}
                <a href="{{ route('booking.check.index') }}"
                    class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Cek Booking</a>
            </nav>

            <!-- Tombol CTA & Hamburger Menu -->
            <div class="flex items-center">
                <a href="{{ route('booking.create') }}"
                    class="hidden sm:inline-block bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 shadow-sm hover:shadow-lg">
                    Booking Now
                </a>
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

    <!-- Menu Mobile -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Beranda</a>
            <a href="{{ route('layanan') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Layanan</a>
            <a href="{{ route('tentang-kami') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Tentang
                Kami</a>
            <a href="{{ route('kontak') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Kontak</a>
            {{-- === LINK BARU DITAMBAHKAN === --}}
            <a href="{{ route('booking.check.index') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Cek
                Booking</a>
            <div class="border-t my-2"></div>
            <a href="{{ route('booking.create') }}"
                class="block w-full text-left bg-blue-600 text-white font-semibold mt-2 px-4 py-3 rounded-lg hover:bg-blue-700 transition-all">
                Booking Now
            </a>
        </div>
    </div>
</header>
