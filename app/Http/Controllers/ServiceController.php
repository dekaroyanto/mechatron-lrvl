<?php

namespace App\Http\Controllers;

use App\Data\ServicesData;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $allServices = ServicesData::all();
        $businessServices = ServicesData::byGroup('Teknologi Baru Untuk Bisnis Anda');
        $fleetServices = ServicesData::byGroup('Teknologi Terkini Di Layanan Kami.');

        return view('services.index', compact('allServices', 'businessServices', 'fleetServices'));
    }

    public function show(string $slug): View
    {
        $service = ServicesData::get($slug);

        if (!$service) {
            abort(404, 'Layanan tidak ditemukan.');
        }

        return view('services.show', compact('service'));
    }
}
