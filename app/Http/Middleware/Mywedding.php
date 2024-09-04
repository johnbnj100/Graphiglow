<?php

namespace App\Http\Middleware;

use App\Models\Wedding;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Mywedding
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $order = Wedding::where('user_id', auth()->id())->latest()->limit(1)->get();
        if ($order->isEmpty()) {
            return redirect('/wedding');
        }else
        return $next($request);
    }
}
