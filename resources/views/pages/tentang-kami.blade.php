@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <section class="bg-slate-700 py-16 text-white text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Partner Terpercaya Perawatan Mobil Anda</h1>
            <p class="mt-2 text-lg text-slate-300">Mengenal lebih dekat bengkel berkat yakin dan tim profesional kami.</p>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="{{ asset('assets/12.png') }}" alt="Gambar Bengkel Berkat Yakin"
                        class="rounded-xl shadow-xl w-full">
                </div>
                <div>
                    <p class="mb-4">
                        Bengkel <strong>Berkat Yakin</strong> merupakan usaha yang berdiri sejak tahun <strong>2004</strong>
                        dengan tujuan memberikan layanan perawatan dan perbaikan kendaraan yang dapat dipercaya oleh masyarakat.
                    </p>

                    <p class="mb-4">
                        Berawal dari bengkel sederhana dengan fasilitas terbatas, bengkel ini terus berkembang hingga mampu
                        menyediakan layanan yang lebih lengkap, meliputi servis rutin, penggantian oli, perawatan komponen,
                        hingga penggantian sparepart sesuai standar kualitas.
                    </p>

                    <p class="mb-4">
                        Didukung oleh tenaga mekanik yang berpengalaman lebih dari 20 tahun di bidang otomotif, setiap pekerjaan
                        dilaksanakan dengan penuh ketelitian, tanggung jawab, serta berorientasi pada keselamatan dan kepuasan
                        pelanggan.
                    </p>

                    <p>
                        Hingga kini, Bengkel Berkat Yakin tetap konsisten mempertahankan eksistensinya sebagai mitra terpercaya
                        bagi pemilik kendaraan melalui profesionalisme, pelayanan ramah, serta pemanfaatan peralatan yang terus
                        diperbarui untuk memastikan performa kendaraan pelanggan tetap optimal dan aman digunakan.
                    </p>
                </div>
            </div>
        </div>
    </section>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Tim Kami</title>
</head>
<body class="bg-gray-50 flex justify-center items-center min-h-screen">

 <!-- Tim Kami -->
<section class="py-20 pb-28 text-center bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Tim Profesional Kami</h2>
    <p class="text-lg text-slate-600 mb-12">
      Dipimpin oleh para ahli di bidang otomotif, siap melayani Anda.
    </p>

    <div class="flex flex-wrap justify-center gap-16">
      <!-- Anggota Tim 1 -->
      <div class="flex flex-col items-center">
        <img src="https://placehold.co/400x400/334155/e2e8f0?text=Foto+Tim"
             class="w-48 h-48 rounded-full shadow-lg object-cover mb-8"
             alt="Foto Kepala Mekanik">
        <h3 class="text-xl font-bold">Nofaldi</h3>
        <p class="text-slate-500 mt-2">Pemilik Bengkel</p>
      </div>

      <!-- Anggota Tim 2 -->
      <div class="flex flex-col items-center">
        <img src="https://placehold.co/400x400/334155/e2e8f0?text=Foto+Tim"
             class="w-48 h-48 rounded-full shadow-lg object-cover mb-8"
             alt="Foto Spesialis Mesin">
        <h3 class="text-xl font-bold">Bayu Gunawan</h3>
        <p class="text-slate-500 mt-2">Mekanik</p>
      </div>
    </div>
  </div>
</section>


</body>
</html>
@endsection

