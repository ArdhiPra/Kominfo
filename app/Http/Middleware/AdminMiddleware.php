<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Kalau tidak login, redirect ke login
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Silakan login sebagai admin.');
        }

        // Kalau login tapi bukan admin → tolak
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Unauthorized');
        }

        // Kalau admin → lanjut
        return $next($request);
    }
}

