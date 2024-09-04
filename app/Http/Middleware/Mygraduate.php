<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Graduation;
use Symfony\Component\HttpFoundation\Response;

class Mygraduate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $order = Graduation::where('user_id', auth()->id())->latest()->limit(1)->get();
        if ($order->isEmpty()) {
            return redirect('/graduate');
        }else

        return $next($request);
    }
}
