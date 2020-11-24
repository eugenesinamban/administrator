<?php

namespace App\Http\Middleware;

use App\Product;
use App\Type;
use Closure;

class CheckIfTypeExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $product = $request->product;
        $types = Type::pluck('text')->toArray();
        if (!in_array($product, $types)) {
            // if not in list, redirect to dashboard
            return redirect('/home')->withErrors(['product' => 'Object Not Found!']);
        };
        
        return $next($request);
    }
}
