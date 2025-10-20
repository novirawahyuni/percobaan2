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
                <a href="{{ route('booking.check.index') }}"
                    class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Cek Booking</a>
            </nav>

            <!-- Tombol Aksi & Otentikasi -->
            <div class="flex items-center">
                @guest
                    {{-- Tampilan jika user belum login --}}
                    <a href="{{ route('login') }}"
                        class="hidden sm:inline-block bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 shadow-sm hover:shadow-lg">
                        Login
                    </a>
                @endguest

                @auth
                    {{-- Tampilan jika user sudah login --}}
                    <div x-data="{ open: false }" class="hidden sm:block relative ml-4">
                        <button @click="open = !open"
                            class="flex items-center space-x-2 text-slate-600 hover:text-blue-600 font-medium transition-colors">
                            <span>Halo, {{ Auth::user()->name }}</span>
                            <i data-lucide="chevron-down" class="w-4 h-4 transition-transform"
                                :class="{ 'rotate-180': open }"></i>
                        </button>

                        <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 border"
                            style="display: none;">
                            <a href="{{ route('history.index') }}"
                                class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Riwayat Saya</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                    Logout
                                </a>
                            </form>
                        </div>
                    </div>
                @endauth

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
            <a href="{{ route('booking.check.index') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Cek
                Booking</a>
            <div class="border-t my-2"></div>
            @auth
                <div class="px-3 py-2">
                    <p class="text-base font-medium text-slate-800">Halo, {{ Auth::user()->name }}</p>
                </div>
                <a href="{{ route('history.index') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Riwayat
                    Saya</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                        class="block mt-2 w-full text-left bg-red-50 text-red-700 font-semibold px-4 py-3 rounded-lg">
                        Logout
                    </a>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}"
                    class="block w-full text-left bg-blue-600 text-white font-semibold mt-2 px-4 py-3 rounded-lg hover:bg-blue-700 transition-all">
                    Login / Daftar
                </a>
            @endguest
        </div>
    </div>
</header>
