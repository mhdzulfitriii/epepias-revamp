<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'E-PEPIAS') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('PEPIAS.png') }}">
    <meta property="og:site_name" content="epepias" />        
    <meta property="og:image" content="{{ asset('PEPIAS.png') }} " />
    <meta name="robots" content="noindex">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body class="font-sans text-gray-900 antialiased ">        

    <div id="navbar" class="">
        @include('layouts.nav-guest')
    </div>           

    <div class="">
        {{$slot}}
    </div>

    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Berjaya !',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif


    @if (session('error'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Gagal !',
                    text: '{{ session('error') }}',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif

    @include('guest.component.footer')

    <script>
        window.onload = function() {
            const loader = document.getElementById('loader');            
            const app = document.getElementById('app');

            
            if (loader) {
                loader.style.display = 'none';
            }
            if (app) {
                app.classList.remove('hidden');
            }
        };
    </script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.body.style.zoom = "80%";
    });
</script>
</html>
