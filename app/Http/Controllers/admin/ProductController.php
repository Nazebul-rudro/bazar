<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
       $products =  Product::all();
return view('ecommerce.admin.product.index', compact('products'));
    }
    public function create()
    {
return view('ecommerce.admin.product.create');
    }
    public function store(Request $request, Product $product)
    {
        $exe = $request->file('image')->getClientOriginalExtension();
        $fileName = time() . uniqid() . '.' . $exe;
        $request->file('image')->storeAs('/public/products', $fileName);

$product->create([
          'name' => $request->name,
          'quantity' => $request->quantity,
          'old_price' => $request->old_price,
          'regular_price' => $request->regular_price,
          'image' => $fileName,
          'is_active' => 1,
]);
return redirect()->route('product');

    }

}
