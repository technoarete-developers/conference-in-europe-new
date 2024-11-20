<?php

use App\Http\Controllers\FilterApiController;
use App\Http\Controllers\TopicFetchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(FilterApiController::class)->group(function () {
    Route::post('/subtopics/fetch', 'getSubtopicApi')->name('subtopics-fetch-api');

    Route::post('/subtopics/fetch/fr', 'getSubtopicApiFr')->name('subtopics-fetch-api-fr');
});

Route::controller(TopicFetchController::class)->group(function () {
    Route::get('/topic-fetch', 'countryApi')->name('topic-fetch');
});
