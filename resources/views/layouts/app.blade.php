<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Judul akan dinamis, dengan judul default jika tidak diatur --}}
    <title>@yield('title', 'Bengkel Berkat Yakin - Perawatan dan Perbaikan Mobil')</title>

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

    {{-- Memanggil bagian Header --}}
    @include('layouts.partials.header')

    <main>
        {{-- Di sinilah konten unik dari setiap halaman akan ditampilkan --}}
        @yield('content')
    </main>

    {{-- Memanggil bagian Footer --}}
    @include('layouts.partials.footer')


    <script>
        // Inisialisasi Lucide Icons
        lucide.createIcons();

        // Script untuk Hamburger Menu (ada di dalam header, tapi diletakkan di sini agar aman)
        const hamburgerButton = document.getElementById('hamburger-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (hamburgerButton && mobileMenu) {
            hamburgerButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

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
        document.addEventListener('DOMContentLoaded', () => {
            handleScrollAnimation();
        });
    </script>
</body>

</html>
