<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        try {
            $locale = $request->route('locale');
            if (!in_array($locale, ['en', 'ar'])) {
                abort(404);
            }
        } catch (\Throwable $th) {
            $locale = 'ar';
        }
        URL::defaults(['locale' => $locale]);
        App::setLocale($locale);
        return $next($request);
    }
}
