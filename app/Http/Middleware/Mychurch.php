<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Church;
use Illuminate\Support\Facades\Auth;

class Mychurch
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $order = Church::where('user_id',auth()->id())->latest()->limit(1)->get();
        if ($order->isEmpty()) {
            return redirect('/church');
        }else

        return $next($request);
    }
}
