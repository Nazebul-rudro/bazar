<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    //
    public function index()
    {
        $products = Product::inRandomOrder()->limit(5)->get();
        return view('ecommerce.fontend.index', compact('products'));
    }

    public function cart()
    {
        return view('ecommerce.fontend.cart');
    }

    public function checkout()
    {
        return view('ecommerce.fontend.checkout');
    }

    public function about()
    {
        return view('ecommerce.fontend.about');
    }

    public function contact()
    {
        return view('ecommerce.fontend.contact');
    }



}
