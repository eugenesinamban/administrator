<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Support\Facades\Validator;

class ProductRepository
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getProductById($id) {
        return Product::find($id);
    }

    public function getAllProducts() {
        return Product::all();
    }

    public function getAllProductsByType(Type $type) {
        return $type->products;
    }

    public function updateDataByType(Type $type, Product $product, $data) {
        $validator = Validator::make($data, [
            'text' => ['required'],
            'slug' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect($type->slug . '/edit/' . $product->slug)
                ->withErrors($validator)
                ->withInput();
        }
        
        $type->products->find($product)->update($data);

        return null;
    }

    public function storeDataByType(Type $type, $data) {
        $validator = Validator::make($data, [
            'text' => ['required', 'unique:products'],
            'slug' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect($type->slug . '/create')
                ->withErrors($validator)
                ->withInput();
        }

        $type->products()->create($data);

        return null;

    }

    public function destroyProduct($type, $product) {
        $product->delete();
        return null;
    }
}