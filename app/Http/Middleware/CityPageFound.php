<?php

namespace App\Http\Middleware;

use App\Http\Controllers\JsonFetchDataController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CityPageFound
{
    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    public function handle(Request $request, Closure $next): Response
    {
        $countryWithCity = $this->filter->countryWithCity();

        foreach ($countryWithCity as $country => $cityList) {
            if (array_key_exists($request->city, $cityList)) {
                return $next($request);
            }
        }

        abort(404);
    }
}
