<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfModel
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
        $types = ['ramen'];
        if (!in_array($product, $types)) {
            // if not in list, redirect to dashboard
            return redirect('/home')->withErrors(['product' => 'No Object Found!']);
        };
        
        return $next($request);
    }
}
