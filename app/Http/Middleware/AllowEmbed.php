<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllowEmbed
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        
        // Menghapus proteksi X-Frame-Options agar bisa dibaca Google Sites
        $response->headers->set('X-Frame-Options', 'ALLOWALL'); 
        $response->headers->set('Content-Security-Policy', "frame-ancestors 'self' https://sites.google.com; img-src 'self' data: https: http:;");

        return $response;
    }
}
