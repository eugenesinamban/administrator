<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

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
            'slug' => ['required'],
            'description' => ['required'],
            'image' => ['image']
        ]);

        if ($validator->fails()) {
            return redirect($type->slug . '/edit/' . $product->slug)
                ->withErrors($validator)
                ->withInput();
        }

        if (isset($data['image'])) {
            $prevUrl = $product->image_url;
            $newUrl = Storage::disk('gcs')->put('images', $data['image']);
            Storage::disk('gcs')->delete($prevUrl);
            $data['image_url'] = $newUrl;
            unset($data['image']);
        }

        $type->products->find($product)->update($data);

        return null;
    }

    public function storeDataByType(Type $type, $data) {
        $validator = Validator::make($data, [
            'text' => ['required', 'unique:products'],
            'slug' => ['required'],
            'description' => ['required'],
            'image' => ['required', 'image']
        ]);
        
        if ($validator->fails()) {
            return redirect($type->slug . '/create')
                ->withErrors($validator)
                ->withInput();
        }

        $imageUrl = Storage::disk('gcs')->put('images', $data['image']);
        
        $data['image_url'] = $imageUrl;
        unset($data['image']);

        $type->products()->create($data);

        return null;

    }

    public function destroyProduct($type, $product) {
        $product->delete();
        return null;
    }

    public function addLikeToProduct(Product $product) {
        if (null === request()->cookie($product->slug)) {
            $product->likes++;
            $product->save();
            return true;
        }
        return false;
    }
}