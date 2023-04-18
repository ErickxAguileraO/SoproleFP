<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HSTS
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (!App::environment('local')) {
            $response->headers->set(
                'Strict-Transport-Security',
                'max-age=31536000; includeSubdomains',
                true
            );

            $response->headers->set(
                'X-Frame-Options',
                'SAMEORIGIN',
                true
            );

            $response->headers->set(
                'X-Content-Type-Options',
                'nosniff',
                true
            );

            $response->headers->set(
                'Referrer-Policy',
                'no-referrer',
                true
            );

            $response->headers->set(
                'Permissions-Policy',
                'microphone=(), geolocation=()',
                true
            );

            $response->headers->set(
                'Content-Security-Policy',
                "frame-src youtube.com www.youtube.com",
                true
            );
        }

        return $response;
    }
}
