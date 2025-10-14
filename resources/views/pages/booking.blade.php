<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Online - Bengkel Berkat Yakin</title>

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
            background-color: #f8fafc;
            /* slate-50 */
        }

        /* CSS KRUSIAL UNTUK MULTI-STEP FORM */
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .step-indicator {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="text-slate-800">

    <!-- HEADER / NAVBAR -->
    <header class="bg-white/80 backdrop-blur-sm shadow-md sticky top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">Bengkel Berkat Yakin</a>
                </div>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Beranda</a>
                    <a href="{{ route('layanan') }}"
                        class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Layanan</a>
                    <a href="{{ route('tentang-kami') }}"
                        class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Tentang Kami</a>
                    <a href="{{ route('kontak') }}"
                        class="text-slate-600 hover:text-blue-600 font-medium transition-colors">Kontak</a>
                </nav>
                <div class="flex items-center">
                    <a href="{{ route('booking.create') }}"
                        class="hidden sm:inline-block bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 shadow-sm hover:shadow-lg">Booking
                        Online</a>
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
                <a href="{{ route('home') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Beranda</a>
                <a href="{{ route('layanan') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Layanan</a>
                <a href="{{ route('tentang-kami') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Tentang
                    Kami</a>
                <a href="{{ route('kontak') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-blue-600 hover:bg-slate-50">Kontak</a>
                <a href="{{ route('booking.create') }}"
                    class="block w-full text-left bg-blue-600 text-white font-semibold mt-2 px-4 py-3 rounded-lg hover:bg-blue-700 transition-all">Booking
                    Online</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Page Header -->
        <section class="bg-slate-700 py-16 text-white text-center">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold">Booking Servis Online</h1>
                <p class="mt-2 text-lg text-slate-300">Amankan jadwal servis Anda hanya dalam beberapa langkah mudah.
                </p>
            </div>
        </section>

        <!-- Form Booking -->
        <section class="py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
                <div class="bg-white p-8 rounded-xl shadow-2xl">
                    <!-- Step Indicators -->
                    <div class="flex justify-between items-start mb-8">
                        <div id="step-indicator-1" class="step-indicator text-center w-1/4">
                            <div
                                class="mx-auto bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg">
                                1</div>
                            <p class="mt-2 text-sm font-semibold text-blue-600">Pilih Layanan</p>
                        </div>
                        <div class="flex-1 h-px bg-slate-200 mt-5"></div>
                        <div id="step-indicator-2" class="step-indicator text-center w-1/4">
                            <div
                                class="mx-auto bg-slate-300 text-slate-500 w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg">
                                2</div>
                            <p class="mt-2 text-sm font-semibold text-slate-500">Pilih Jadwal</p>
                        </div>
                        <div class="flex-1 h-px bg-slate-200 mt-5"></div>
                        <div id="step-indicator-3" class="step-indicator text-center w-1/4">
                            <div
                                class="mx-auto bg-slate-300 text-slate-500 w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg">
                                3</div>
                            <p class="mt-2 text-sm font-semibold text-slate-500">Data Diri</p>
                        </div>
                        <div class="flex-1 h-px bg-slate-200 mt-5"></div>
                        <div id="step-indicator-4" class="step-indicator text-center w-1/4">
                            <div
                                class="mx-auto bg-slate-300 text-slate-500 w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg">
                                4</div>
                            <p class="mt-2 text-sm font-semibold text-slate-500">Konfirmasi</p>
                        </div>
                    </div>

                    <form id="booking-form" action="{{ route('booking.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- Step 1: Layanan -->
                        <div id="form-step-1" class="form-step active">
                            <h3 class="text-2xl font-bold mb-6">Pilih layanan yang Anda butuhkan</h3>
                            @if ($errors->any())
                                <div class="bg-red-50 text-red-700 p-4 rounded-lg mb-4">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @forelse($servicesByCategory as $category => $services)
                                <div class="mb-6">
                                    <h4 class="text-lg font-semibold mb-3 border-b pb-2 text-slate-800">
                                        {{ $category }}</h4>
                                    <div class="grid sm:grid-cols-2 gap-4">
                                        @foreach ($services as $service)
                                            <label
                                                class="flex items-center p-4 border border-slate-200 rounded-lg hover:bg-blue-50 cursor-pointer has-[:checked]:bg-blue-50 has-[:checked]:border-blue-500 transition-all">
                                                <input type="checkbox" name="services[]" value="{{ $service->id }}"
                                                    class="h-5 w-5 text-blue-600 border-slate-300 rounded focus:ring-blue-500">
                                                <span class="ml-3 text-slate-700">{{ $service->name }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            @empty
                                <p class="text-slate-500">Saat ini belum ada layanan yang tersedia.</p>
                            @endforelse
                        </div>

                        <!-- Step 2: Jadwal -->
                        <div id="form-step-2" class="form-step">
                            <h3 class="text-2xl font-bold mb-6">Pilih tanggal dan waktu</h3>
                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="booking_date"
                                        class="block text-sm font-medium text-slate-700">Tanggal</label>
                                    <input type="date" name="booking_date" id="booking_date" required
                                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                </div>
                                <div>
                                    <label for="booking_time"
                                        class="block text-sm font-medium text-slate-700">Waktu</label>
                                    <select id="booking_time" name="booking_time" required
                                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                        <option>08:00</option>
                                        <option>09:00</option>
                                        <option>10:00</option>
                                        <option>13:00</option>
                                        <option>14:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Data Diri & Kendaraan -->
                        <div id="form-step-3" class="form-step">
                            <h3 class="text-2xl font-bold mb-6">Isi data diri & mobil Anda</h3>
                            <div class="grid sm:grid-cols-2 gap-6">
                                @auth
                                    <div class="sm:col-span-2 bg-blue-50 p-4 rounded-lg border border-blue-200">
                                        <p class="text-sm text-slate-600">Anda melakukan booking sebagai:</p>
                                        <p class="font-bold text-lg text-slate-800">{{ Auth::user()->name }}</p>
                                    </div>
                                @endauth
                                @guest
                                    <div><label for="name" class="block text-sm font-medium text-slate-700">Nama
                                            Lengkap</label><input type="text" name="name" id="name" required
                                            class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md"></div>
                                    <div><label for="phone" class="block text-sm font-medium text-slate-700">Nomor
                                            Telepon (WA)</label><input type="tel" name="phone" id="phone"
                                            required
                                            class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md"></div>
                                @endguest
                                <div>
                                    <label for="tipe_id" class="block text-sm font-medium text-slate-700">Tipe
                                        Kendaraan</label>
                                    <select name="tipe_id" id="tipe_id" required
                                        class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md">
                                        <option value="">-- Pilih Tipe --</option>
                                        @foreach ($tipes as $tipe)
                                            <option value="{{ $tipe->id }}">{{ $tipe->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="model" class="block text-sm font-medium text-slate-700">Model
                                        Kendaraan</label>
                                    <input type="text" name="model" id="model"
                                        placeholder="Contoh: Innova Reborn" required
                                        class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md">
                                </div>
                                <div><label for="tahun"
                                        class="block text-sm font-medium text-slate-700">Tahun</label><input
                                        type="number" name="tahun" id="tahun" placeholder="Contoh: 2020"
                                        required
                                        class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md"></div>
                                <div class="sm:col-span-2"><label for="nomor_polisi"
                                        class="block text-sm font-medium text-slate-700">Nomor Polisi</label><input
                                        type="text" name="nomor_polisi" id="nomor_polisi"
                                        placeholder="Contoh: BM 1234 ABC" required
                                        class="mt-1 block w-full px-3 py-2 border border-slate-300 rounded-md"></div>
                            </div>
                        </div>

                        <!-- Step 4: Konfirmasi -->
                        <div id="form-step-4" class="form-step">
                            <h3 class="text-2xl font-bold mb-6">Konfirmasi Booking Anda</h3>
                            <div class="bg-slate-50 p-6 rounded-lg space-y-3 border border-slate-200">
                                <p><strong>Layanan:</strong> <span id="summary-service"
                                        class="font-normal text-slate-600"></span></p>
                                <p><strong>Jadwal:</strong> <span id="summary-schedule"
                                        class="font-normal text-slate-600"></span></p>
                                <p><strong>Nama:</strong> <span id="summary-name"
                                        class="font-normal text-slate-600"></span></p>
                                <p><strong>Mobil:</strong> <span id="summary-car"
                                        class="font-normal text-slate-600"></span> (<span id="summary-plate"
                                        class="font-normal text-slate-600"></span>)</p>
                                <div class="pt-3 mt-3 border-t border-slate-200">
                                    <p><strong>Metode Pembayaran:</strong> <span id="summary-payment"
                                            class="font-normal text-slate-600"></span></p>
                                </div>
                            </div>
                            <div class="mt-8">
                                <h3 class="text-xl font-bold mb-4">Pilih Metode Pembayaran</h3>
                                <div class="space-y-4">
                                    <label
                                        class="flex items-center p-4 border border-slate-200 rounded-lg hover:bg-blue-50 cursor-pointer has-[:checked]:bg-blue-50 has-[:checked]:border-blue-500 transition-all">
                                        <input type="radio" name="payment_method" value="Bayar di Tempat"
                                            class="h-5 w-5 text-blue-600 border-slate-300 focus:ring-blue-500" checked>
                                        <span class="ml-3 text-slate-700 font-semibold">Bayar di Tempat</span>
                                    </label>
                                    <label
                                        class="flex items-center p-4 border border-slate-200 rounded-lg hover:bg-blue-50 cursor-pointer has-[:checked]:bg-blue-50 has-[:checked]:border-blue-500 transition-all">
                                        <input type="radio" name="payment_method" value="Transfer"
                                            class="h-5 w-5 text-blue-600 border-slate-300 focus:ring-blue-500">
                                        <span class="ml-3 text-slate-700 font-semibold">Transfer Bank / E-Wallet</span>
                                    </label>
                                </div>
                            </div>
                            <div id="transfer-options" class="mt-6 hidden">
                                <h4 class="font-semibold text-slate-600 mb-3">Pilih salah satu metode transfer:</h4>
                                <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-6 gap-4">
                                    <button type="button" data-payment="BCA" data-account="1234567890"
                                        data-name="Bengkel Berkat Yakin"
                                        class="payment-option p-2 border rounded-lg hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"><img
                                            src="https://placehold.co/100x40/FFFFFF/00529B?text=BCA" alt="BCA"
                                            class="h-8 w-full object-contain rounded"></button>
                                    <button type="button" data-payment="Mandiri" data-account="0987654321"
                                        data-name="Bengkel Berkat Yakin"
                                        class="payment-option p-2 border rounded-lg hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"><img
                                            src="https://placehold.co/100x40/FFFFFF/003366?text=Mandiri"
                                            alt="Mandiri" class="h-8 w-full object-contain rounded"></button>
                                    <button type="button" data-payment="GoPay" data-account="082172591419"
                                        data-name="Bengkel Berkat Yakin"
                                        class="payment-option p-2 border rounded-lg hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"><img
                                            src="https://placehold.co/100x40/FFFFFF/138808?text=GoPay" alt="GoPay"
                                            class="h-8 w-full object-contain rounded"></button>
                                </div>
                                <div id="payment-details"
                                    class="mt-4 hidden bg-blue-50 p-4 rounded-lg border border-blue-200">
                                    <p class="font-semibold text-slate-800">Silakan transfer ke rekening berikut:</p>
                                    <p class="mt-1"><strong id="payment-detail-method"
                                            class="text-slate-700"></strong></p>
                                    <p class="text-lg">Nomor: <strong id="payment-detail-account"
                                            class="text-blue-600 tracking-wider"></strong></p>
                                    <p>Atas Nama: <strong id="payment-detail-name" class="text-slate-700"></strong>
                                    </p>
                                </div>
                                <div id="upload-section" class="mt-4 hidden">
                                    <label for="payment_proof" class="block text-sm font-medium text-slate-700">Unggah
                                        Bukti Transfer (Opsional)</label>
                                    <input type="file" name="payment_proof" id="payment_proof"
                                        class="mt-1 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer">
                                    <p class="text-xs text-slate-500 mt-1">File: JPG, PNG (Maks. 2MB).</p>
                                </div>
                            </div>
                            <p class="mt-8 text-sm text-slate-500">Pastikan semua data sudah benar. Kami akan
                                mengirimkan notifikasi konfirmasi ke nomor telepon Anda.</p>
                        </div>

                        <!-- Tombol Navigasi -->
                        <div class="mt-8 pt-6 border-t border-slate-200 flex justify-between items-center">
                            <button type="button" id="prev-btn"
                                class="bg-slate-200 text-slate-700 font-semibold px-6 py-2 rounded-lg hover:bg-slate-300 transition-colors disabled:opacity-50"
                                disabled>Kembali</button>
                            <button type="button" id="next-btn"
                                class="bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">Lanjut</button>
                            <button type="submit" id="submit-btn"
                                class="hidden bg-green-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">Konfirmasi
                                Booking</button>
                        </div>
                    </form>
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
                    <p class="text-slate-400">Solusi perawatan mobil modern, profesional, dan terpercaya.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Navigasi</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('layanan') }}" class="hover:text-white transition-colors">Layanan</a>
                        </li>
                        <li><a href="{{ route('tentang-kami') }}" class="hover:text-white transition-colors">Tentang
                                Kami</a></li>
                        <li><a href="{{ route('kontak') }}" class="hover:text-white transition-colors">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Hubungi Kami</h3>
                    <ul class="space-y-3 text-slate-400">
                        <li class="flex items-start"><i data-lucide="map-pin"
                                class="w-5 h-5 mr-3 mt-1 flex-shrink-0 text-blue-400"></i>Jl. Prof. M. Yamin,
                            Bangkinang, Riau</li>
                        <li class="flex items-center"><i data-lucide="phone"
                                class="w-5 h-5 mr-3 text-blue-400"></i>+62 821-7259-1419</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Jam Operasional</h3>
                    <ul class="space-y-2 text-slate-400">
                        <li>Senin - Rabu: 08:00 - 17:00</li>
                        <li>Kamis - Jumat: Tutup</li>
                        <li>Sabtu - Minggu: 08:00 - 17:00</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-700 mt-8 pt-8 text-center text-slate-500">
                <p>&copy; {{ date('Y') }} Bengkel Berkat Yakin. All rights reserved.</p>
            </div>
        </div>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- Inisialisasi Ikon & Menu Mobile ---
            lucide.createIcons();
            const hamburgerButton = document.getElementById('hamburger-button');
            const mobileMenu = document.getElementById('mobile-menu');
            hamburgerButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // --- 1. PENGAMBILAN ELEMEN FORM ---
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            const submitBtn = document.getElementById('submit-btn');
            const formSteps = document.querySelectorAll('.form-step');
            const stepIndicators = document.querySelectorAll('.step-indicator');
            let currentStep = 1;

            // --- 2. FUNGSI UTAMA ---
            const updateFormSteps = () => {
                formSteps.forEach(step => step.classList.remove('active'));
                document.getElementById(`form-step-${currentStep}`).classList.add('active');

                stepIndicators.forEach((indicator, index) => {
                    const indicatorDiv = indicator.querySelector('div');
                    const indicatorP = indicator.querySelector('p');
                    const stepNumber = index + 1;

                    if (stepNumber < currentStep) { // Step yang sudah selesai
                        indicatorDiv.className =
                            'mx-auto bg-green-500 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg';
                        indicatorP.className = 'mt-2 text-sm font-semibold text-green-500';
                    } else if (stepNumber === currentStep) { // Step saat ini
                        indicatorDiv.className =
                            'mx-auto bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg';
                        indicatorP.className = 'mt-2 text-sm font-semibold text-blue-600';
                    } else { // Step berikutnya
                        indicatorDiv.className =
                            'mx-auto bg-slate-300 text-slate-500 w-10 h-10 rounded-full flex items-center justify-center font-bold text-lg';
                        indicatorP.className = 'mt-2 text-sm font-semibold text-slate-500';
                    }
                });

                prevBtn.disabled = currentStep === 1;
                nextBtn.classList.toggle('hidden', currentStep === formSteps.length);
                submitBtn.classList.toggle('hidden', currentStep !== formSteps.length);
            };

            const updateSummary = () => {
                const selectedServices = Array.from(document.querySelectorAll(
                        'input[name="services[]"]:checked')).map(cb => cb.nextElementSibling.textContent.trim())
                    .join(', ');
                document.getElementById('summary-service').textContent = selectedServices || 'N/A';

                const date = document.getElementById('booking_date').value;
                const time = document.getElementById('booking_time').value;
                document.getElementById('summary-schedule').textContent = `${date}, Pukul ${time}`;

                const nameInput = document.getElementById('name');
                document.getElementById('summary-name').textContent = nameInput ? nameInput.value :
                    '{{ Auth::user()->name ?? 'Data Pengguna' }}';

                const tipeSelect = document.getElementById('tipe_id');
                const selectedTipeText = tipeSelect.options[tipeSelect.selectedIndex].text;
                // Menambahkan Model Kendaraan ke Ringkasan
                const model = document.getElementById('model').value;
                document.getElementById('summary-car').textContent =
                    `${selectedTipeText} ${model} (${document.getElementById('tahun').value})`;
                document.getElementById('summary-plate').textContent = document.getElementById('nomor_polisi')
                    .value.toUpperCase();

                const paymentMethodRadio = document.querySelector('input[name="payment_method"]:checked');
                let paymentSummaryText = 'N/A';
                if (paymentMethodRadio) {
                    paymentSummaryText = paymentMethodRadio.value;
                    if (paymentMethodRadio.value === 'Transfer') {
                        const selectedOption = document.querySelector('.payment-option.ring-2');
                        paymentSummaryText = selectedOption ? `Transfer - ${selectedOption.dataset.payment}` :
                            'Transfer - Belum Dipilih';
                    }
                }
                document.getElementById('summary-payment').textContent = paymentSummaryText;
            };

            // --- 3. EVENT LISTENERS ---
            nextBtn.addEventListener('click', () => {
                if (currentStep < formSteps.length) {
                    currentStep++;
                    if (currentStep === formSteps.length) {
                        updateSummary();
                    }
                    updateFormSteps();
                }
            });

            prevBtn.addEventListener('click', () => {
                if (currentStep > 1) {
                    currentStep--;
                    updateFormSteps();
                }
            });

            const paymentRadios = document.querySelectorAll('input[name="payment_method"]');
            const transferOptions = document.getElementById('transfer-options');
            const paymentDetails = document.getElementById('payment-details');
            const uploadSection = document.getElementById('upload-section');
            const paymentOptions = document.querySelectorAll('.payment-option');

            paymentRadios.forEach(radio => {
                radio.addEventListener('change', (e) => {
                    const isTransfer = e.target.value === 'Transfer';
                    transferOptions.classList.toggle('hidden', !isTransfer);
                    if (!isTransfer) {
                        paymentDetails.classList.add('hidden');
                        uploadSection.classList.add('hidden');
                        paymentOptions.forEach(opt => opt.classList.remove('ring-2',
                            'ring-blue-500'));
                    }
                    if (currentStep === formSteps.length) updateSummary();
                });
            });

            paymentOptions.forEach(option => {
                option.addEventListener('click', () => {
                    paymentOptions.forEach(opt => opt.classList.remove('ring-2', 'ring-blue-500'));
                    option.classList.add('ring-2', 'ring-blue-500');

                    document.getElementById('payment-detail-method').textContent = option.dataset
                        .payment;
                    document.getElementById('payment-detail-account').textContent = option.dataset
                        .account;
                    document.getElementById('payment-detail-name').textContent = option.dataset
                    .name;

                    paymentDetails.classList.remove('hidden');
                    uploadSection.classList.remove('hidden');

                    if (currentStep === formSteps.length) updateSummary();
                });
            });

            // --- 4. INISIALISASI ---
            updateFormSteps();
        });
    </script>

</body>

</html>
