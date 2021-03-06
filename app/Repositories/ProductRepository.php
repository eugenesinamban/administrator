<?php

namespace App\Repositories;

use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;
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

    public function getAllProductsByTypeAccordingToRank(Type $type) {
        return collect($type->products->sortByDesc('likes')->all());
    }

    public function updateDataByType(Type $type, Product $product, $data) {
        $validator = Validator::make($data, [
            'text' => ['required'],
            'slug' => ['required'],
            'description' => ['required'],
            'image' => ['image'],
            'likes' => ['required']
        ]);
        
        if ($validator->fails()) {
            return redirect()
                ->route('edit', [$type->slug, $product->slug])
                ->withErrors($validator)
                ->withInput();
        }

        if (isset($data['image'])) {
            if ('/assets/images/no_image.svg' === $prevUrl = $product->image_url) {
                Storage::disk('gcs')->delete($prevUrl);
            };
            $this->uploadImage($data);
        }

        $type->products->find($product)->update($data);

        return null;
    }

    public function storeDataByType(Type $type, $data) {
        $validator = Validator::make($data, [
            'text' => ['required', 'unique:products'],
            'slug' => ['required'],
            'description' => ['required'],
            'image' => ['image']
        ]);
        
        if ($validator->fails()) {
            return redirect()
                ->route('add', [$type->slug])
                ->withErrors($validator)
                ->withInput();
        }

        if (isset($data['image'])) {
            $this->uploadImage($data);
        }

        $type->products()->create($data);

        return null;

    }

    public function storeDataByFile(Type $type, $data) {
        $validator = Validator::make($data, [
            'file' => ['required', 'file']
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('addByFile', [$type->slug])
                ->withErrors($validator)
                ->withInput();
        }
        
        Excel::import(new ProductsImport, $data['file']);
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

    public function uploadImage(&$data) {
        $imageBaseUrl = env("GOOGLE_CLOUD_STORAGE_URI");
        $imageSlug = Storage::disk('gcs')->put('images', $data['image']);
        $data['image_url'] = $imageBaseUrl . $imageSlug;
        unset($data['image']);
    }
}