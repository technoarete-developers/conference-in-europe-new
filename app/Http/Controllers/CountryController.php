<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\EventsService;
use App\Services\UpCommingEventService;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    protected $filter, $upcomingEvent, $getEvent;

    public function __construct(JsonFetchDataController $filter, UpCommingEventService $upcomingEvent, EventsService $getEvent)
    {
        $this->filter = $filter;
        $this->upcomingEvent = $upcomingEvent;
        $this->getEvent = $getEvent;
    }

    ///////////////////////////////////////// ------------> ENGLISH PAGES <------------- ///////////////////////////////////////


    public function countryPage(Request $request)
    {
        $country = str_replace("-", " ", $request->country);

        $monthList = $this->filter->monthList();
        $topicStopicList = $this->filter->topicSubtopicList();
        $topicList = $this->filter->topicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $content = $this->filter->countryContent($request->country);

        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events = $this->getEvent->countryEvents($country);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.country', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content'));
    }


    public function countryTopicPage(Request $request)
    {
        $country = str_replace("-", " ", $request->country);
        $topic = str_replace("-", " ", $request->topic);

        $monthList = $this->filter->monthList();
        $topicStopicList = $this->filter->topicSubtopicList();
        $topicList = $this->filter->topicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $content = $this->filter->countryTopicContent($request->country, $request->topic);

        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events = $this->getEvent->countryTopicEvents($country, $topic);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.country-topic', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content'));
    }


    public function countryMonthPage(Request $request)
    {
        $country = str_replace("-", " ", $request->country);
        $month = $request->month;

        $monthList = $this->filter->monthList();
        $topicStopicList = $this->filter->topicSubtopicList();
        $topicList = $this->filter->topicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $content = $this->filter->countryMonthContent($request->country, $request->month);

        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events = $this->getEvent->countryMonthEvents($country, $month);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.country-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content'));
    }

    public function countryTopicMonthPage(Request $request)
    {
        $country = str_replace("-", " ", $request->country);
        $topic = str_replace("-", " ", $request->topic);
        $month = $request->month;

        $monthList = $this->filter->monthList();
        $topicStopicList = $this->filter->topicSubtopicList();
        $topicList = $this->filter->topicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $content = $this->filter->countryTopicMonthContent($request->country, $request->topic, $request->month);

        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events =  $this->getEvent->countryTopicMonthEvents($country, $topic, $month);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.country-topic-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content'));
    }


    ///////////////////////////////////////// ------------> FRENCH PAGES <------------- ///////////////////////////////////////


    public function countryPageFr(Request $request)
    {
        $country = str_replace("-", " ", $request->country);

        $monthList = $this->filter->monthListFr();
        $topicStopicList = $this->filter->topicSubtopicListFr();
        $topicList = $this->filter->topicListFr();
        $topCountry = $this->filter->topCountryFr();
        $countryWithCity = $this->filter->countryWithCityFr();
        $content = $this->filter->countryContentFr($request->country);
        $countryNameFr = $this->filter->getCountryFrName($request->country);

        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events = $this->getEvent->countryEvents($country);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-fr.country', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content', 'countryNameFr'));
    }


    public function countryTopicPageFr(Request $request)
    {
        $country = str_replace("-", " ", $request->country);
        $topic = str_replace("-", " ", $request->topic);

        $monthList = $this->filter->monthListFr();
        $topicStopicList = $this->filter->topicSubtopicListFr();
        $topicList = $this->filter->topicListFr();
        $topCountry = $this->filter->topCountryFr();
        $countryWithCity = $this->filter->countryWithCityFr();
        $content = $this->filter->countryTopicContentFr($request->country, $request->topic);
        $countryNameFr = $this->filter->getCountryFrName($request->country);
        $topicNameFr = $this->filter->getTopicFrName($request->topic);

        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events = $this->getEvent->countryTopicEvents($country, $topic);

        if ($request->ajax()) {
            dd($topic);
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-fr.country-topic', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content', 'countryNameFr', 'topicNameFr'));
    }


    public function countryMonthPageFr(Request $request)
    {
        $country = str_replace("-", " ", $request->country);
        $month = $request->month;

        $monthList = $this->filter->monthListFr();
        $topicStopicList = $this->filter->topicSubtopicListFr();
        $topicList = $this->filter->topicListFr();
        $topCountry = $this->filter->topCountryFr();
        $countryWithCity = $this->filter->countryWithCityFr();
        $content = $this->filter->countryMonthContentFr($request->country, $request->month);
        $countryNameFr = $this->filter->getCountryFrName($request->country);
        $monthNameFr = $this->filter->getMonthFrName($request->month);

        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events = $this->getEvent->countryMonthEvents($country, $month);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-fr.country-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content', 'countryNameFr', 'monthNameFr'));
    }

    public function countryTopicMonthPageFr(Request $request)
    {
        $country = str_replace("-", " ", $request->country);
        $topic = str_replace("-", " ", $request->topic);
        $month = $request->month;

        $monthList = $this->filter->monthListFr();
        $topicStopicList = $this->filter->topicSubtopicListFr();
        $topicList = $this->filter->topicListFr();
        $topCountry = $this->filter->topCountryFr();
        $countryWithCity = $this->filter->countryWithCityFr();
        $content = $this->filter->countryTopicMonthContentFr($request->country, $request->topic, $request->month);
        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);
        $countryNameFr = $this->filter->getCountryFrName($request->country);
        $topicNameFr = $this->filter->getTopicFrName($request->topic);
        $monthNameFr = $this->filter->getMonthFrName($request->month);

        $events =  $this->getEvent->countryTopicMonthEvents($country, $topic, $month);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-fr.country-topic-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content', 'countryNameFr', 'topicNameFr', 'monthNameFr'));
    }
}
