<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request and apply the active application locale.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $supportedLocales = config('app.supported_locales', ['id', 'en']);

        if ($request->has('lang') && in_array($request->query('lang'), $supportedLocales, true)) {
            $locale = (string) $request->query('lang');
            session(['locale' => $locale]);
        } else {
            $locale = (string) session('locale', 'id');
        }

        if (! in_array($locale, $supportedLocales, true)) {
            $locale = 'id';
        }

        App::setLocale($locale);

        return $next($request);
    }
}

