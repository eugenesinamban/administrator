<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function list($slug) {
        $products = Product::where('type', $slug)->get();
        return view('pages.product.list', compact('slug', 'products'));
    }

    public function create($slug) {
        return view('pages.product.create', compact('slug'));
    }

    public function store($slug, Request $request) {
        
        $data = $request->validate([
            'text' => ['required', 'unique:products'],
        ]);
        $data['type'] = $slug;

        Product::create($data);

        return redirect($slug)->with('success', 'Product Added Successfully!');
    }

    public function edit($slug, $id) {
        $product = Product::find($id);
        return view('pages.product.edit', compact('slug', 'product'));
    }

    public function update($slug, Request $request) {
        // TODO work on update
        dd($request);
        dd($slug);
    }

    public function destroy($slug) {
        // TODO work on destroy
        dd($slug);
    }

}