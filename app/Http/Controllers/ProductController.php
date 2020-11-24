<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function list($product) {
        $products = Product::where('type', $product)->get();
        return view('pages.product.list', compact('product', 'products'));
    }

    public function create($product) {
        return view('pages.product.create', compact('product'));
    }

    public function store($product, Request $request) {
        
        $data = $request->validate([
            'text' => ['required', 'unique:products'],
        ]);
        $data['type'] = $product;

        Product::create($data);

        return redirect($product);
    }
}
