<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $products = Product::latest()->take(8)->get();
        $articles = Article::published()->latest()->take(3)->get();
        return view('home', compact('products', 'articles'));
    }
}
