@extends('layouts.app')

@section('content')
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
                    Bengkel <strong>Berkat Yakin</strong> merupakan usaha yang berdiri sejak tahun <strong>2004</strong>
                    dengan tujuan memberikan layanan perawatan dan perbaikan kendaraan yang dapat dipercaya oleh masyarakat.
                    </p>Berawal dari bengkel sederhana dengan fasilitas terbatas, bengkel ini terus berkembang hingga mampu
                    menyediakan layanan yang lebih lengkap, meliputi servis rutin, penggantian oli, perawatan komponen,
                    hingga penggantian sparepart sesuai standar kualitas. Didukung oleh tenaga mekanik yang berpengalaman
                    lebih dari 20 tahun di bidang otomotif, setiap pekerjaan dilaksanakan dengan penuh ketelitian,
                    tanggung jawab, serta berorientasi pada keselamatan dan kepuasan pelanggan. Hingga kini, Bengkel Berkat
                    Yakin tetap konsisten mempertahankan eksistensinya sebagai mitra terpercaya bagi pemilik kendaraan
                    melalui profesionalisme, pelayanan ramah, serta pemanfaatan peralatan yang terus diperbarui untuk
                    memastikan performa kendaraan pelanggan tetap optimal dan aman digunakan.</p>
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
@endsection
