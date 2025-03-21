<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
        <meta property="og:site_name" content="epepias" />        
        <meta property="og:image" content="{{ asset('PEPIAS.png') }} " />
        <meta name="robots" content="noindex">
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">        

        @include('layouts.nav.admin')
            
        <div class="w-full lg:ps-64">
            <div class="md:p-4 space-y-4 sm:space-y-6 border border-dashed m-5 rounded-lg">
                {{$slot}}
            </div>
        </div>
    </body>
    <script>
        document.body.style.zoom = "85%";
    </script>
</html>
