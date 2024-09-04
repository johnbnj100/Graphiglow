<?php

namespace App\Http\Middleware;

use App\Models\Packaging;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Mypackage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $order = Packaging::where('user_id', Auth::user()->id)->latest()->limit(1)->get();
        if ($order->isEmpty()) {
            return redirect('/packaging');
        }else

        return $next($request);
    }
}
