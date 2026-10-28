@extends('layouts.app')

@section('title', 'Mechatron')
@section('meta_description', 'Mechatron menghadirkan inovasi drone pertanian, sistem ground control, dan teknologi otonom pintar mutakhir di Indonesia.')

@section('content')
    <!-- 1. Flagship Cinematic Hero Banner -->
    <x-hero-banner :products="$products" />

    <!-- 2. Featured 2-Column Minimalist Studio Showcase -->
    <x-featured-hero-grid :products="$products" />

    <!-- 3. Layanan Drone Mechatron (DJI Style 3-Column Showcase) -->
    <x-services-section :services="$services" />

    <!-- 4. Sertifikat Resmi Mechatron -->
    <x-certificates-section />

    <!-- 5. Artikel & Wawasan Terbaru (3 Artikel Terkini) -->
    <x-latest-articles-section :latestArticles="$latestArticles" />
@endsection
