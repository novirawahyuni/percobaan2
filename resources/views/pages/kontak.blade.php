@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <section class="bg-slate-700 py-16 text-white text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Hubungi Kami</h1>
            <p class="mt-2 text-lg text-slate-300">Kami siap membantu menjawab pertanyaan Anda.</p>
        </div>
    </section>

    <!-- Konten Kontak -->
    <section class="py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Info Kontak -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h2 class="text-2xl font-bold mb-6">Informasi Kontak</h2>
                    <div class="space-y-6">
                        <div class="flex items-start"><i data-lucide="map-pin"
                                class="w-6 h-6 mr-4 mt-1 text-blue-600 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-semibold">Alamat</h3>
                                   <p class="text-slate-600">Jl. Professor Moh. Yamin SH Bangkinang - Riau</p>
                            </div>
                        </div>
                        <div class="flex items-start"><i data-lucide="phone"
                                class="w-6 h-6 mr-4 mt-1 text-blue-600 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-semibold">Telepon</h3>
                                <p class="text-slate-600">(+62) 0821 - 7259 - 1419</p>
                            </div>
                        </div>
                        <div class="flex items-start"><i data-lucide="clock"
                                class="w-6 h-6 mr-4 mt-1 text-blue-600 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-semibold">Jam Operasional</h3>
                                <p class="text-slate-600">Senin - Rabu: 09:00 - 17:00</p>
                                <p class="text-slate-600">Kamis - Jumat: Tutup</p>
                                <p class="text-slate-600">Sabtu - Ahad: 09:00 - 17:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Temukan Peta -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h2 class="text-2xl font-bold mb-6">Temukan Kami dipeta</h2>
                        <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden">
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510687.7014472241!2d100.4373405734375!3d0.3409780000000165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d515baa45af975%3A0x5dad8c1c6a2f4f19!2sBerkat%20Yakin%20Service%20Ganti%20Oli!5e0!3m2!1sid!2sid!4v1762408471884!5m2!1sid!2sid" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </div>
                    </iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
