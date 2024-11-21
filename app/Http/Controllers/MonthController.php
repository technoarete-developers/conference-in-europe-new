<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\EventsService;
use App\Services\UpCommingEventService;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    protected $filter, $upcomingEvent, $getEvent;

    public function __construct(JsonFetchDataController $filter, UpCommingEventService $upcomingEvent, EventsService $getEvent)
    {
        $this->filter = $filter;
        $this->upcomingEvent = $upcomingEvent;
        $this->getEvent = $getEvent;
    }


    public function monthPage(Request $request)
    {
        $month = $request->month;

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicList();
        $topicStopicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $content = $this->filter->monthContent($request->month);

        $upcomingEvent = $this->upcomingEvent->monthUpcomingEvents($month);

        $events = $this->getEvent->monthEvents($month);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content'));
    }


    public function monthPageFr(Request $request)
    {
        $month = $request->month;

        $monthList = $this->filter->monthListFr();
        $topicList = $this->filter->topicListFr();
        $topicStopicList = $this->filter->topicSubtopicListFr();
        $topCountry = $this->filter->topCountryFr();
        $countryWithCity = $this->filter->countryWithCityFr();
        $content = $this->filter->monthContentFr($request->month);
        $monthNameFr = $this->filter->getMonthFrName($request->month);

        $upcomingEvent = $this->upcomingEvent->monthUpcomingEvents($month);

        $events = $this->getEvent->monthEvents($month);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-fr.month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content', 'monthNameFr'));
    }
}
