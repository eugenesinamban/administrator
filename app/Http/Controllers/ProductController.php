<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $product = request()->product;
        $types = ['ramen'];
        if (!in_array($product, $types)) {
            // if not in list, redirect to dashboard
            return redirect()->route('home')->withErrors('error', 'No Object Found!');
        };
    }
    public function list($product) {
        // $object =  object->getAll();
        // return with object
        
        return view('pages.product.list', compact('product'));
    }

    public function create($product) {
        return view('pages.product.create', compact('product'));
    }

    public function store($product, Request $request) {
        $data = $request->validate([
            'text' => ['required', 'unique:products']
        ]);
        // dd($data);
        Product::create($data);
        return redirect('list');
    }
}
