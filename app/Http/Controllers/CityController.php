<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use App\Services\UpCommingEventService;
use Illuminate\Http\Request;

class CityController extends Controller
{
   protected $filter, $upcomingEvent;

   public function __construct(JsonFetchDataController $filter, UpCommingEventService $upcomingEvent)
   {
      $this->filter = $filter;
      $this->upcomingEvent = $upcomingEvent;
   }

   public function cityPage(Request $request)
   {
      $city = str_replace("-", " ", $request->city);

      $monthList = $this->filter->monthList();
      $topicList = $this->filter->topicSubtopicList();
      $topCountry = $this->filter->topCountry();
      $countryWithCity = $this->filter->countryWithCity();
      $countryName = $this->filter->currentCountry($request->city);
      $content = $this->filter->cityContent($request->city);
      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = EventTable::where('city', $city)->orderBy('sdate')->paginate(50);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-en.city', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }


   public function cityTopicPage(Request $request)
   {
      $city = str_replace("-", " ", $request->city);
      $topic = str_replace("-", " ", $request->topic);

      $monthList = $this->filter->monthList();
      $topicList = $this->filter->topicSubtopicList();
      $topCountry = $this->filter->topCountry();
      $countryWithCity = $this->filter->countryWithCity();
      $countryName = $this->filter->currentCountry($request->city);
      $content = $this->filter->cityTopicContent($request->city, $request->topic);
      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = EventTable::where('city', $city)
         ->where(function ($query) use ($topic) {
            $query->where('sub_topic', 'LIKE', "%{$topic}%")
               ->orWhere('topic', 'like', "%{$topic}%");
         })->orderBy('sdate')
         ->paginate(50);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-en.city-topic', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }


   public function cityMonthPage(Request $request)
   {
      $city = str_replace("-", " ", $request->city);
      $month = $request->month;

      $monthList = $this->filter->monthList();
      $topicList = $this->filter->topicSubtopicList();
      $topCountry = $this->filter->topCountry();
      $countryWithCity = $this->filter->countryWithCity();
      $countryName = $this->filter->currentCountry($request->city);
      $content = $this->filter->cityMonthContent($request->city, $request->month);
      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = EventTable::where('city', $city)->where('month', 'like', "%{$month}%")->orderBy('sdate')->paginate(50);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-en.city-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }


   public function cityTopicMonthPage(Request $request)
   {
      $city = str_replace("-", " ", $request->city);
      $topic = str_replace("-", " ", $request->topic);
      $month = $request->month;

      $monthList = $this->filter->monthList();
      $topicList = $this->filter->topicSubtopicList();
      $topCountry = $this->filter->topCountry();
      $countryWithCity = $this->filter->countryWithCity();
      $countryName = $this->filter->currentCountry($request->city);
      $content = $this->filter->cityTopicMonthContent($request->city, $request->topic, $request->month);
      $upcomingEvent = $this->upcomingEvent->cityUpcomingEvents($city);

      $events = EventTable::where('city', $city)->where('month', 'like', "%{$month}%")
         ->where(function ($query) use ($topic) {
            $query->where('sub_topic', 'LIKE', "%{$topic}%")
               ->orWhere('topic', 'like', "%{$topic}%");
         })->orderBy('sdate')
         ->paginate(50);

      if ($request->ajax()) {
         $response = [
            'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
            'loadMore' => view('components-en.load-more', compact('events'))->render(),
         ];
         return response()->json($response);
      }

      return view('pages-en.city-topic-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'countryName', 'monthList', 'content'));
   }
}
