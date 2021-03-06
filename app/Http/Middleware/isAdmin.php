<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
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
        if (auth()->check() &&  $request->user()->role == 1){
            return view('admin.index');
        }
      elseif (auth()->check() && $request->user()->role ==2){
            return view('vendor.vendorIndex');
      }
        else{
            return $next($request);
        }

    }
}
