<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContentSecurityPolicy
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        // Menambahkan header CSP
        $response->header('Content-Security-Policy', "img-src 'self' data: https://proyekiii.github.io;");
        return $response;
    }
}