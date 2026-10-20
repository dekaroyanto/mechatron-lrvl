<?php

namespace App\Http\Controllers;

use App\Data\BlogArticles;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $articles = BlogArticles::all();

        return view('blog.index', compact('articles'));
    }

    public function show(string $slug): View
    {
        $post = BlogArticles::get($slug);

        if (!$post) {
            abort(404, 'Artikel tidak ditemukan.');
        }

        $relatedPosts = BlogArticles::related($slug, 3);

        return view('blog.show', compact('post', 'relatedPosts'));
    }
}
