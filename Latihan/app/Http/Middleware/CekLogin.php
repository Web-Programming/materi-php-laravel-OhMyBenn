<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // <- ini penting

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $roles): Response
    {
        // Cek apakah user sudah login
        if (Auth::check()) {
            // Cek apakah level sesuai dengan role yang dipassing
            if (Auth::user()->level === $roles) {
                return $next($request);
            }
        }

        return redirect('login')->withErrors(['failed' => 'Anda tidak memiliki akses!']);
    }
}
