<?php

namespace App\Http\Middleware;

use App\Http\Controllers\JsonFetchDataController;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TopicPageFound
{
    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    public function handle(Request $request, Closure $next): Response
    {
        $topicList = $this->filter->topicSubtopicList();

        foreach ($topicList as $topic => $subtopic) {

            if (strtolower($request->topic) === $topic) {
                return $next($request);
            }

            foreach ($subtopic as $url => $name) {
                if (strtolower($request->topic) === $url) {
                    return $next($request);
                }
            }
        }

    }
}
