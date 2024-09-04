<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Calender;
use Illuminate\Support\Facades\Auth;

class Mycalender
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $order = Calender::where('user_id',auth()->id())->latest()->limit(1)->get();
        if ($order->isEmpty()) {
            return redirect('/calender');
        }else


        return $next($request);
    }
}
