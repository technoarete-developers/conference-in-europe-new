<?php

namespace App\Http\Middleware;

use App\Http\Controllers\JsonFetchDataController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CityTopicMonthPageFound
{
    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    public function handle(Request $request, Closure $next): Response
    {
        $countryWithCity = $this->filter->countryWithCity();
        $topicList = $this->filter->topicSubtopicList();
        $monthList = $this->filter->monthList();

        $cityMatch = false;
        $topicMatch = false;
        $monthMatch = false;

        foreach ($countryWithCity as $country => $cityList) {
            if (array_key_exists($request->city, $cityList)) {
                $cityMatch = true;
            }
        }

        foreach ($topicList as $topic => $subtopic) {

            if (strtolower($request->topic) === $topic) {
                $topicMatch = true;
                break;
            }

            foreach ($subtopic as $url => $name) {
                if (strtolower($request->topic) === $url) {
                    $topicMatch = true;
                    break;
                }
            }
        }


        if (array_key_exists(strtolower($request->month), $monthList)) {
            $monthMatch = true;
        }

        if ($cityMatch && $topicMatch && $monthMatch) {
            return $next($request);
        } else {
            abort(404);
        }
    }
}