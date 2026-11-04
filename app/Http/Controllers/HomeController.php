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
        $businessServices = ServicesData::all();
        $fleetServices = ServicesData::all();
        $latestArticles = BlogArticles::latest(3);

        return view('home', compact('products', 'businessServices', 'fleetServices', 'latestArticles'));
    }
}
