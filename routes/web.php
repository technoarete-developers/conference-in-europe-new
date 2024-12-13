<?php

use App\Http\Controllers\AddEventController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EventDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\SearchBoxController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TopicController;
use App\Http\Middleware\CityPageFound;
use App\Http\Middleware\CityTopicMonthPageFound;
use App\Http\Middleware\CityTopicPageFound;
use App\Http\Middleware\CountryPageFound;
use App\Http\Middleware\CountryTopicMonthPageFound;
use App\Http\Middleware\CountryTopicPageFound;
use App\Http\Middleware\SearchPageFound;
use App\Http\Middleware\TopicPageFound;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// robots file local and test and production
Route::get('/robots.txt', [RobotsController::class, 'robotsConnection'])->name('robots-dynamic');

Route::get('/about', function () {
    return view('pages-en.about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/faq', function () {
    return view('pages-en.faq');
})->name('faq');

Route::get('/video-conferences', function () {
    return view('pages-en.video-conferences');
})->name('video-conferences');

Route::get('/sitemap.html', function () {
    return view('sitemap');
})->name('sitemap');

Route::get('/terms-and-condition', function () {
    return view('pages-en.terms-and-condition');
})->name('terms-and-condition');


Route::controller(AddEventController::class)->group(function () {
    Route::get('/add-event', 'addEventPage')->name('add-event');

    Route::post('/add-event-from', 'addEventForm')->name('add-event-from');
});


Route::controller(SubscribeController::class)->group(function () {
    Route::get('/subscribe', 'subscribePage')->name('subscribe');

    Route::post('/subscribe-form', 'subscribeForm')->name('subscribe-form');
    Route::post('/footer-subscribe-form', 'footerSubscribeForm')->name('footer-subscribe-form');
    Route::post('/event-subscribe', 'eventSubscribeForm')->name('event-subscribe-form');
});


Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contactPage')->name('contact');

    Route::post('/contact-form', 'contactForm')->name('contact-form');
});


Route::controller(EventDetailsController::class)->group(function () {
    Route::get('/eventdetail/{event_id}', 'eventDetailPage')->name('event-detail');
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'homePage')->name('home');
    Route::get('/topic/{topic}', 'topicListPage')->middleware(TopicPageFound::class)->name('topic-list-page');
    Route::get('/journal', 'journalPage')->name('journal-page');
});

Route::controller(SearchBoxController::class)->group(function () {
    Route::get('/search', 'advanceSerachPage')->middleware(SearchPageFound::class)->name('advance-search');

    Route::get('/advance-search-ajax', 'advanceSerachPage')->name('advance-search-ajax');
});


Route::controller(TopicController::class)->group(function () {
    Route::get('/topic-list/{topic}', 'topicPage')->middleware(TopicPageFound::class)->name('topic-page');
    Route::get('/topic-list/{topic}/{month}', 'topicMonthPage')->where('month', '(january|february|march|april|may|june|july|august|september|october|november|december)')->middleware(TopicPageFound::class)->name('topic-month-page');

    Route::get('/topic-ajax', 'topicPage')->name('topic-ajax');
    Route::get('/topic-month-ajax', 'topicMonthPage')->name('topic-month-ajax');
});


Route::controller(CityController::class)->group(function () {
    Route::get('/cities/{city}', 'cityPage')->middleware(CityPageFound::class)->name('city-page');
    Route::get('/cities/{city}/{month}', 'cityMonthPage')->where('month', '(january|february|march|april|may|june|july|august|september|october|november|december)')->middleware(CityPageFound::class)->name('city-month-page');
    Route::get('/cities/{city}/{topic}', 'cityTopicPage')->middleware(CityTopicPageFound::class)->name('city-topic-page');
    Route::get('/cities/{city}/{topic}/{month}', 'cityTopicMonthPage')->middleware(CityTopicMonthPageFound::class)->name('city-topic-month-page');

    Route::get('/city-ajax', 'cityPage')->name('city-ajax');
    Route::get('/city-month-ajax', 'cityMonthPage')->name('city-month-ajax');
    Route::get('/city-topic-ajax', 'cityTopicPage')->name('city-topic-ajax');
    Route::get('/city-topic-month-ajax', 'cityTopicMonthPage')->name('city-topic-month-ajax');
});


Route::controller(MonthController::class)->group(function () {
    Route::get('/{month}', 'monthPage')->where('month', '(january|february|march|april|may|june|july|august|september|october|november|december)')->name('month-page');

    Route::get('/month-ajax', 'monthPage')->name('month-ajax');
});


Route::controller(CountryController::class)->group(function () {
    Route::get('/{country}', 'countryPage')->middleware(CountryPageFound::class)->name('country-page');
    Route::get('/{country}/{month}', 'countryMonthPage')->where('month', '(january|february|march|april|may|june|july|august|september|october|november|december)')->middleware(CountryPageFound::class)->name('country-month-page');
    Route::get('/{country}/{topic}', 'countryTopicPage')->middleware(CountryTopicPageFound::class)->name('country-topic-page');
    Route::get('/{country}/{topic}/{month}', 'countryTopicMonthPage')->middleware(CountryTopicMonthPageFound::class)->name('country-topic-month-page');

    Route::get('/country-ajax', 'countryPage')->name('country-ajax');
    Route::get('/country-month-ajax', 'countryMonthPage')->name('country-month-ajax');
    Route::get('/country-topic-ajax', 'countryTopicPage')->name('country-topic-ajax');
    Route::get('/country-topic-month-ajax', 'countryTopicMonthPage')->name('country-topic-month-ajax');
});




