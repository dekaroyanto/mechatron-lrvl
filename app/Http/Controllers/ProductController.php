<?php

namespace App\Http\Controllers;

use App\Data\DroneProducts;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $selectedCategory = $request->query('kategori', 'all');
        $categories = DroneProducts::categories();
        $allProducts = DroneProducts::all();
        $products = DroneProducts::byCategory($selectedCategory);

        return view('products.index', compact('categories', 'products', 'allProducts', 'selectedCategory'));
    }

    public function show(string $slug): View
    {
        $product = DroneProducts::get($slug);

        if (! $product) {
            abort(404, 'Produk Mechatron tidak ditemukan.');
        }

        $allProducts = DroneProducts::all();
        $relatedProducts = array_filter($allProducts, fn ($item) => $item['id'] !== $product['id']);

        return view('products.show', compact('product', 'relatedProducts'));
    }
}
