<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Models\Type;

class ProductController extends Controller
{

    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function list(Type $type) {
        $products = $this->productRepository->getAllProductsByType($type);
        return view('admin.pages.product.list', compact('type', 'products'));
    }

    public function show(Type $type, Product $product) {
        return view('admin.pages.product.show', compact('product'));
    }

    public function create($type) {
        return view('admin.pages.product.create', compact('type'));
    }

    public function store(Type $type, Request $request) {
        
        $data = $request->only([
           'text',
           'slug',
           'description',
           'image'
        ]);

        $message = ['success' => 'Product Added Successfully!'];
        $result = $this->productRepository->storeDataByType($type, $data);

        return $result ?? redirect()->route('list', [$type->slug])->with($message);
    }

    public function edit(Type $type, Product $product) {
        return view('admin.pages.product.edit', compact('type', 'product'));
    }

    public function update(Request $request, Type $type, Product $product) {

        $data = $request->only([
            'text',
            'slug'
        ]);

        $message = ['success' => 'Product Edited Successfully!'];
        $result = $this->productRepository->updateDataByType($type, $product, $data);

        return $result ?? redirect()->route('list', [$type->slug])->with($message);
    }

    public function destroy(Type $type, Product $product) {
        $result = $this->productRepository->destroyProduct($type, $product);
        $message = ['success' => 'Product Deleted Successfully!'];
        return $result ?? redirect()->route('list', [$type->slug])->with($message);
    }

}