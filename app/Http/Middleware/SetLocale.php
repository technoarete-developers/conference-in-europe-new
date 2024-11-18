<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        if ($locale === 'fr-fr') {
            App::setLocale('fr-fr');
        } else {
            App::setLocale('en');
        }

        return $next($request);
    }
}
