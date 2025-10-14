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
                    <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a></li>
                    <li><a href="{{ route('layanan') }}" class="hover:text-white transition-colors">Layanan</a></li>
                    <li><a href="{{ route('tentang-kami') }}" class="hover:text-white transition-colors">Tentang Kami</a></li>
                    <li><a href="{{ route('kontak') }}" class="hover:text-white transition-colors">Kontak</a></li>
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
                    <li>Senin - Rabu: 08:00 - 17:00</li>
                    <li>Kamis - Jumat: Tutup</li>
                    <li>Sabtu - Ahad: 09:00 - 17:00</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-700 mt-8 pt-8 text-center text-slate-500">
            <p>&copy; {{ date('Y') }} Bengkel Berkat Yakin.</p>
        </div>
    </div>
</footer>
