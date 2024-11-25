<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RobotsController extends Controller
{
    public function robotsConnection(Request $request)
    {
        if ($request->ip() == '127.0.0.1') {
            return response()->file(public_path('robots/robots-local.txt'));
        } else {
            if (str_contains($request->url(), 'test.')) {
                return response()->file(public_path('robots/robots-test.txt'));
            } else {
                return response()->file(public_path('robots/robots-production.txt'));
            }
        }
    }
}
