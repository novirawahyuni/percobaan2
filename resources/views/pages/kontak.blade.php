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
                                <p class="text-slate-600">Jl. Otomotif Raya No. 123, Jakarta, Indonesia</p>
                            </div>
                        </div>
                        <div class="flex items-start"><i data-lucide="phone"
                                class="w-6 h-6 mr-4 mt-1 text-blue-600 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-semibold">Telepon</h3>
                                <p class="text-slate-600">(021) 1234 5678</p>
                            </div>
                        </div>
                        <div class="flex items-start"><i data-lucide="mail"
                                class="w-6 h-6 mr-4 mt-1 text-blue-600 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-semibold">Email</h3>
                                <p class="text-slate-600">halo@bengkelpro.com</p>
                            </div>
                        </div>
                        <div class="flex items-start"><i data-lucide="clock"
                                class="w-6 h-6 mr-4 mt-1 text-blue-600 flex-shrink-0"></i>
                            <div>
                                <h3 class="font-semibold">Jam Operasional</h3>
                                <p class="text-slate-600">Senin - Sabtu: 08:00 - 17:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 pt-6 border-t border-slate-200">
                        <h3 class="font-semibold mb-4">Temukan Kami di Peta</h3>
                        <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.81958031476882!3d-6.194420395514693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f424b2e2d939%3A0x8a91a9228f346fa6!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1672543210987!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
                        </div>
                    </div>
                </div>
                <!-- Formulir Kontak -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
                    <form action="#" method="POST" class="space-y-6">
                        <div><label for="name" class="block text-sm font-medium text-slate-700">Nama
                                Lengkap</label><input type="text" name="name" id="name" required
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md shadow-sm placeholder-slate-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div><label for="email" class="block text-sm font-medium text-slate-700">Alamat
                                Email</label><input type="email" name="email" id="email" required
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md shadow-sm placeholder-slate-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div><label for="subject" class="block text-sm font-medium text-slate-700">Subjek</label><input
                                type="text" name="subject" id="subject" required
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md shadow-sm placeholder-slate-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div><label for="message" class="block text-sm font-medium text-slate-700">Pesan Anda</label>
                            <textarea id="message" name="message" rows="4" required
                                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md shadow-sm placeholder-slate-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                        <div><button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">Kirim
                                Pesan</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
