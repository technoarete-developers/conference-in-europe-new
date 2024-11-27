<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchPageFound
{

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('keyword')) {
          
            $keyword = $request->query('keyword');

            $transformedKeyword = strtolower(str_replace(['%', ' ', ','], ' ', $keyword));

            $request->query->set('keyword', $transformedKeyword);

        }

        return $next($request);
    }
}
