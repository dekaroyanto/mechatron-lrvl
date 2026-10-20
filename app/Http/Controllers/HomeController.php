<?php

namespace App\Http\Controllers;

use App\Data\DroneProducts;
use App\Data\ServicesData;
use App\Data\BlogArticles;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = DroneProducts::all();
        $businessServices = ServicesData::byGroup('Teknologi Baru Untuk Bisnis Anda');
        $fleetServices = ServicesData::byGroup('Teknologi Terkini Di Layanan Kami.');
        $latestArticles = BlogArticles::latest(3);

        return view('home', compact('products', 'businessServices', 'fleetServices', 'latestArticles'));
    }
}
