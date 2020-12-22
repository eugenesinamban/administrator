<?php

namespace App\Http\Controllers\External;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Models\Type;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $productRespository;

    public function __construct(ProductRepository $productRespository)
    {
        $this->productRepository = $productRespository;
    }

    public function index(Type $type) {
        $products = $this->productRepository->getAllProductsByType($type);
        return view('public.product.index', compact('type', 'products'));
    }

    public function show(Type $type, Product $product) {
        return view('public.product.show', compact('type', 'product'));
    }

    public function ranking(Type $type) {
        dd($type);
    }

    public function like(Type $type, Product $product) {
        if (!$this->productRepository->addLikeToProduct($product)) {
            return back()->with([$product->slug => "30秒お待ちください"]);
        }
        $cookie = cookie($product->slug, true, 0.5);
        return back()->cookie($cookie);
        
    }

}
