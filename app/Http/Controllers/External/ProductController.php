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

    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(Type $type) {
        $products = $this->productRepository->getAllProductsByType($type);
        $products = $products->sortByDesc('likes')->take(3);
        return view('public.product.index', compact('type', 'products'));
    }

    public function show(Type $type, Product $product) {
        return view('public.product.show', compact('type', 'product'));
    }

    public function ranking(Type $type) {
        $products = $this->productRepository->getAllProductsByTypeAccordingToRank($type);
        return view('public.product.ranking', compact('type', 'products'));
    }

    public function like(Type $type, Product $product) {
        if (!$this->productRepository->addLikeToProduct($product)) {
            return response('error');
        }
        $cookie = cookie($product->slug, true, 0.1);
        return response('approved')->cookie($cookie);
        
    }

}
