<?php

use App\Http\Controllers\AddEventController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EventDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeFrController;
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
    Route::get('/add-event', 'addEventPageFr')->name('add-event-fr');

    Route::post('/add-event-from-fr', 'addEventForm')->name('add-event-from-fr');
});


Route::controller(SubscribeController::class)->group(function () {
    Route::get('/subscribe', 'subscribePageFr')->name('subscribe-fr');

    Route::post('/subscribe-form-fr', 'subscribeForm')->name('subscribe-form-fr');
    Route::post('/footer-subscribe-form-fr', 'footerSubscribeForm')->name('footer-subscribe-form-fr');
});


Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contactPageFr')->name('contact-fr');

    Route::post('/contact-form-fr', 'contactForm')->name('contact-form-fr');
});


// Route::controller(EventSubscribeController::class)->group(function () {
//     Route::get('/eventdetail/{id}', 'eventDetailFr')->name('event-detail');
// });


Route::controller(EventDetailsController::class)->group(function () {
    Route::get('/eventdetail/{event_id}', 'eventDetailPageFr')->name('event-detail-fr');
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'homePageFr')->name('home-fr');
    Route::get('/topic/{topic}', 'topicListPageFr')->name('topic-list-page-fr');
    Route::get('/journal', 'journalPageFr')->name('journal-page-fr');
});

Route::controller(SearchBoxController::class)->group(function () {
    Route::get('/advance-search', 'advanceSerachPageFr')->name('advance-search-fr');

    Route::get('/advance-search-ajax', 'advanceSerachPageFr')->name('advance-search-ajax-fr');
});


Route::controller(TopicController::class)->group(function () {
    Route::get('/topic-list/{topic}', 'topicPageFr')->name('topic-page-fr');
    Route::get('/topic-list/{topic}/{month}', 'topicMonthPageFr')->name('topic-month-page-fr');

    Route::get('/topic-ajax', 'topicPageFr')->name('topic-ajax-fr');
    Route::get('/topic-month-ajax', 'topicMonthPageFr')->name('topic-month-ajax-fr');
});


Route::controller(CityController::class)->group(function () {
    Route::get('/cities/{city}', 'cityPageFr')->name('city-page-fr');
    Route::get('/cities/{city}/{month}', 'cityMonthPageFr')->where('month', '(january|february|march|april|may|june|july|august|september|october|november|december)')->name('city-month-page-fr');
    Route::get('/cities/{city}/{topic}', 'cityTopicPageFr')->name('city-topic-page-fr');
    Route::get('/cities/{city}/{topic}/{month}', 'cityTopicMonthPage')->name('city-topic-month-page-fr');

    Route::get('/city-ajax', 'cityPageFr')->name('city-ajax-fr');
    Route::get('/city-month-ajax', 'cityMonthPageFr')->name('city-month-ajax-fr');
    Route::get('/city-topic-ajax', 'cityTopicPageFr')->name('city-topic-ajax-fr');
    Route::get('/city-topic-month-ajax', 'cityTopicMonthPageFr')->name('city-topic-month-ajax-fr');
});


Route::controller(MonthController::class)->group(function () {
    Route::get('/{month}', 'monthPageFr')->where('month', '(january|february|march|april|may|june|july|august|september|october|november|december)')->name('month-page-fr');

    Route::get('/month-ajax', 'monthPageFr')->name('month-ajax-fr');
});


Route::controller(CountryController::class)->group(function () {
    Route::get('/{country}', 'countryPageFr')->name('country-page-fr');
    Route::get('/{country}/{month}', 'countryMonthPageFr')->where('month', '(january|february|march|april|may|june|july|august|september|october|november|december)')->name('country-month-page-fr');
    Route::get('/{country}/{topic}', 'countryTopicPageFr')->name('country-topic-page-fr');
    Route::get('/{country}/{topic}/{month}', 'countryTopicMonthPageFr')->name('country-topic-month-page-fr');

    Route::get('/country-ajax', 'countryPageFr')->name('country-ajax-fr');
    Route::get('/country-month-ajax', 'countryMonthPageFr')->name('country-month-ajax-fr');
    Route::get('/country-topic-ajax', 'countryTopicPageFr')->name('country-topic-ajax-fr');
    Route::get('/country-topic-month-ajax', 'countryTopicMonthPageFr')->name('country-topic-month-ajax-fr');
});




