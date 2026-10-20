<!DOCTYPE html>
<html lang="id" class="h-full antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mechatron')</title>
    <meta name="description" content="@yield('meta_description', 'Mechatron menghadirkan inovasi drone pertanian, sistem ground control, dan teknologi otonom pintar mutakhir di Indonesia.')">
    <link rel="icon" type="image/png" href="{{ asset('images/mechatron_logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/mechatron_logo.png') }}">

    <!-- Google Fonts: Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!-- Scripts & Styles via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col font-sans bg-[#EDEDED] text-[#000000] selection:bg-[#0070D5] selection:text-white" x-data>
    <!-- 1. Global Navigation Bar -->
    <x-navbar />

    <!-- 2. Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- 3. Official Mechatron Footer -->
    <x-footer />

    <!-- 4. Interactive Modals -->
    <x-product-modal />
    <x-search-modal />
</body>
</html>
