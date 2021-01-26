<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;
use App\Models\Product;
use App\Models\Type;
use App\Repositories\ProductRepository;

class ApiController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;   
    }

    public function index(Request $request, Type $type) {
        $products = $this->productRepository->getAllProductsByType($type);
        $products = $products->sortByDesc('likes')->take(3);
        return ProductResource::collection($products);
    }

}
