<?php

use App\Http\Controllers\AddEventController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EventDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\SearchBoxController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TopicController;
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

Route::get('/about', function () {
    return view('pages-fr.about');
})->name('about-fr');

Route::get('/blog', function () {
    return view('blog');
})->name('blog-fr');

Route::get('/faq', function () {
    return view('pages-fr.faq');
})->name('faq-fr');

Route::get('/advance-search', function () {
    return view('pages-fr.advance-search');
})->name('advance-search-fr');

Route::get('/video-conferences', function () {
    return view('pages-fr.video-conferences');
})->name('video-conferences-fr');

Route::get('/sitemap.html', function () {
    return view('sitemap');
})->name('sitemap-fr');

Route::get('/terms-and-condition', function () {
    return view('pages-fr.terms-and-condition');
})->name('terms-and-condition-fr');


Route::controller(AddEventController::class)->group(function () {
    Route::get('/add-event', 'addEventPage')->name('add-event-fr');

    Route::post('/add-event-from', 'addEventForm')->name('add-event-from-fr');
});


Route::controller(SubscribeController::class)->group(function () {
    Route::get('/subscribe', 'subscribePage')->name('subscribe-fr');

    Route::post('/subscribe-form', 'subscribeForm')->name('subscribe-form-fr');
});


Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contactPage')->name('contact-fr');

    Route::post('/contact-form', 'contactForm')->name('contact-form-fr');
});


// Route::controller(EventSubscribeController::class)->group(function () {
//     Route::get('/eventdetail/{id}', 'eventDetail')->name('event-detail');
// });


Route::controller(EventDetailsController::class)->group(function () {
    Route::get('/eventdetail/{event_id}', 'eventDetailPage')->name('event-detail-fr');
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'homePageFr')->name('home-fr');
    Route::get('/topic/{topic}', 'topicListPage')->name('topic-list-page-fr');
    Route::get('/journal', 'journalPage')->name('journal-page-fr');
});

Route::controller(SearchBoxController::class)->group(function () {
    Route::get('/advance-search', 'advanceSerachPage')->name('advance-search-fr');

    Route::get('/advance-search-ajax', 'advanceSerachPage')->name('advance-search-ajax-fr');
});


Route::controller(TopicController::class)->group(function () {
    Route::get('/topic-list/{topic}', 'topicPage')->name('topic-page-fr');
    Route::get('/topic-list/{topic}/{month}', 'topicMonthPage')->name('topic-month-page-fr');

    Route::get('/topic-ajax', 'topicPage')->name('topic-ajax-fr');
    Route::get('/topic-month-ajax', 'topicMonthPage')->name('topic-month-ajax-fr');
});


Route::controller(CityController::class)->group(function () {
    Route::get('/cities/{city}', 'cityPage')->name('city-page-fr');
    Route::get('/cities/{city}/{month}', 'cityMonthPage')->where('month', '(january|february|march|april|may|june|july|august|september|october|november|december)')->name('city-month-page-fr');
    Route::get('/cities/{city}/{topic}', 'cityTopicPage')->name('city-topic-page-fr');
    Route::get('/cities/{city}/{topic}/{month}', 'cityTopicMonthPage')->name('city-topic-month-page-fr');

    Route::get('/city-ajax', 'cityPage')->name('city-ajax-fr');
    Route::get('/city-month-ajax', 'cityMonthPage')->name('city-month-ajax-fr');
    Route::get('/city-topic-ajax', 'cityTopicPage')->name('city-topic-ajax-fr');
    Route::get('/city-topic-month-ajax', 'cityTopicMonthPage')->name('city-topic-month-ajax-fr');
});


Route::controller(MonthController::class)->group(function () {
    Route::get('/{month}', 'monthPage')->where('month', '(january|february|march|april|may|june|july|august|september|october|november|december)')->name('month-page-fr');

    Route::get('/month-ajax', 'monthPage')->name('month-ajax-fr');
});


Route::controller(CountryController::class)->group(function () {
    Route::get('/{country}', 'countryPage')->name('country-page-fr');
    Route::get('/{country}/{month}', 'countryMonthPage')->where('month', '(january|february|march|april|may|june|july|august|september|october|november|december)')->name('country-month-page-fr');
    Route::get('/{country}/{topic}', 'countryTopicPage')->name('country-topic-page-fr');
    Route::get('/{country}/{topic}/{month}', 'countryTopicMonthPage')->name('country-topic-month-page-fr');

    Route::get('/country-ajax', 'countryPage')->name('country-ajax-fr');
    Route::get('/country-month-ajax', 'countryMonthPage')->name('country-month-ajax-fr');
    Route::get('/country-topic-ajax', 'countryTopicPage')->name('country-topic-ajax-fr');
    Route::get('/country-topic-month-ajax', 'countryTopicMonthPage')->name('country-topic-month-ajax-fr');
});




