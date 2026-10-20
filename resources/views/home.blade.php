@extends('layouts.app')

@section('title', 'Mechatron')
@section('meta_description', 'Mechatron menghadirkan inovasi drone pertanian, sistem ground control, dan teknologi otonom pintar mutakhir di Indonesia.')

@section('content')
    <!-- 1. Flagship Cinematic Hero Banner -->
    <x-hero-banner :products="$products" />

    <!-- 2. Featured 2-Column Minimalist Studio Showcase -->
    <x-featured-hero-grid :products="$products" />

    <!-- 3. Layanan & Solusi Bisnis Mechatron -->
    <x-services-section :businessServices="$businessServices" :fleetServices="$fleetServices" />

    <!-- 4. Artikel & Wawasan Terbaru (3 Artikel Terkini) -->
    <x-latest-articles-section :latestArticles="$latestArticles" />
@endsection
