<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use App\Services\EventsService;
use App\Services\UpCommingEventService;
use Illuminate\Http\Request;

class CityController extends Controller
{
   protected $filter, $upcomingEvent, $getEvent;

   public function __construct(JsonFetchDataController $filter, UpCommingEventService $upcomingEvent, EventsService $getEvent)
   {
      $this->filter = $filter;
      $this->upcomingEvent = $upcomingEvent;
      $this->getEvent = $getEvent;
   }

   ///////////////////////////////////////// ------------> ENGLISH PAGES <------------- ///////////////////////////////////////

   public function cityPage(Request $request)
   {
      $city = str_replace("-", " ", $request->city);

      $monthList = $this->filter->monthList();
      $topicStopicList = $this->filter->topicSubtopicList();
      $topicList = $this->filter->topicList();
      $topCountry = $this->filter->topCountry();
      $countryWithCity = $this->filter->countryWithCity();
      $countryName = $this->filter->getCountry($request->city);
      $content = $this->filter->cityContent($request->city);

      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = $this->getEvent->cityEvents($city);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-en.city', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }


   public function cityTopicPage(Request $request)
   {
      $city = str_replace("-", " ", $request->city);
      $topic = str_replace("-", " ", $request->topic);

      $monthList = $this->filter->monthList();
      $topicStopicList = $this->filter->topicSubtopicList();
      $topicList = $this->filter->topicList();
      $topCountry = $this->filter->topCountry();
      $countryWithCity = $this->filter->countryWithCity();
      $countryName = $this->filter->getCountry($request->city);
      $content = $this->filter->cityTopicContent($request->city, $request->topic);

      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = $this->getEvent->cityTopicEvents($request->city, $request->topic);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-en.city-topic', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }


   public function cityMonthPage(Request $request)
   {
      $city = str_replace("-", " ", $request->city);
      $month = $request->month;

      $monthList = $this->filter->monthList();
      $topicStopicList = $this->filter->topicSubtopicList();
      $topicList = $this->filter->topicList();
      $topCountry = $this->filter->topCountry();
      $countryWithCity = $this->filter->countryWithCity();
      $countryName = $this->filter->getCountry($request->city);
      $content = $this->filter->cityMonthContent($request->city, $request->month);

      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = $this->getEvent->cityMonthEvents($request->city, $request->month);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-en.city-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }


   public function cityTopicMonthPage(Request $request)
   {
      $city = str_replace("-", " ", $request->city);
      $topic = str_replace("-", " ", $request->topic);
      $month = $request->month;

      $monthList = $this->filter->monthList();
      $topicStopicList = $this->filter->topicSubtopicList();
      $topicList = $this->filter->topicList();
      $topCountry = $this->filter->topCountry();
      $countryWithCity = $this->filter->countryWithCity();
      $countryName = $this->filter->getCountry($request->city);
      $content = $this->filter->cityTopicMonthContent($request->city, $request->topic, $request->month);

      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = $this->getEvent->cityTopicMonthEvents($request->city, $request->topic, $request->month);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-en.city-topic-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }

   ///////////////////////////////////////// ------------> FRENCH PAGES <------------- ///////////////////////////////////////

   public function cityPageFr(Request $request)
   {
      $city = str_replace("-", " ", $request->city);

      $monthList = $this->filter->monthListFr();
      $topicStopicList = $this->filter->topicSubtopicListFr();
      $topicList = $this->filter->topicListFr();
      $topCountry = $this->filter->topCountryFr();
      $countryWithCity = $this->filter->countryWithCityFr();
      $content = $this->filter->cityContentFr($request->city);
      $countryName = $this->filter->getCountryFr($request->city);

      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = $this->getEvent->cityEvents($city);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-fr.city', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList','countryWithCity', 'countryName', 'monthList', 'content'));
   }


   public function cityTopicPageFr(Request $request)
   {
      $city = str_replace("-", " ", $request->city);
      $topic = str_replace("-", " ", $request->topic);

      $monthList = $this->filter->monthListFr();
      $topicStopicList = $this->filter->topicSubtopicListFr();
      $topicList = $this->filter->topicListFr();
      $topCountry = $this->filter->topCountryFr();
      $countryWithCity = $this->filter->countryWithCityFr();
      $content = $this->filter->cityTopicContent($request->city, $request->topic);
      $countryName = $this->filter->getCountryFr($request->city);

      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = $this->getEvent->cityTopicEvents($request->city, $request->topic);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-fr.city-topic', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }


   public function cityMonthPageFr(Request $request)
   {
      $city = str_replace("-", " ", $request->city);
      $month = $request->month;

      $monthList = $this->filter->monthListFr();
      $topicStopicList = $this->filter->topicSubtopicListFr();
      $topicList = $this->filter->topicListFr();
      $topCountry = $this->filter->topCountryFr();
      $countryWithCity = $this->filter->countryWithCityFr();
      $content = $this->filter->cityMonthContent($request->city, $request->month);
      $countryName = $this->filter->getCountryFr($request->city);

      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = $this->getEvent->cityMonthEvents($request->city, $request->month);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-fr.city-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }


   public function cityTopicMonthPageFr(Request $request)
   {
      $city = str_replace("-", " ", $request->city);
      $topic = str_replace("-", " ", $request->topic);
      $month = $request->month;

      $monthList = $this->filter->monthListFr();
      $topicStopicList = $this->filter->topicSubtopicListFr();
      $topicList = $this->filter->topicListFr();
      $topCountry = $this->filter->topCountryFr();
      $countryWithCity = $this->filter->countryWithCityFr();
      $content = $this->filter->cityTopicMonthContent($request->city, $request->topic, $request->month);
      $countryName = $this->filter->getCountryFr($request->city);

      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = $this->getEvent->cityTopicMonthEvents($request->city, $request->topic, $request->month);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-fr.city-topic-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }
}
