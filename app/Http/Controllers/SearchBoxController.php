<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use App\Services\EventsService;
use App\Services\UpCommingEventService;
use Illuminate\Http\Request;

class SearchBoxController extends Controller
{
    protected $filter, $upcomingEvent, $getEvent;

    public function __construct(JsonFetchDataController $filter, UpCommingEventService $upcomingEvent, EventsService $getEvent)
    {
        $this->filter = $filter;
        $this->upcomingEvent = $upcomingEvent;
        $this->getEvent = $getEvent;
    }

    public function advanceSerachPage(Request $request)
    {

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicList();
        $topicStopicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();

        $events = $this->getEvent->advanceSearchEvents($request->keyword, $request->country, $request->city, $request->topic, $request->month);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.advance-search', compact('events', 'topCountry', 'topicStopicList', 'topicList', 'countryWithCity', 'monthList'));
    }

    public function advanceSerachPageFr(Request $request)
    {

        $countryNameFr = null;
        $cityNameFr = null;
        $topicNameFr = null;
        $monthNameFr = null;

        $monthList = $this->filter->monthListFr();
        $topicList = $this->filter->topicListFr();
        $topicStopicList = $this->filter->topicSubtopicListFr();
        $topCountry = $this->filter->topCountryFr();
        $countryWithCity = $this->filter->countryWithCityFr();

        if ($request->country) {
            $countryNameFr = $this->filter->getCountryFrName($request->country);
        }
        if ($request->city) {
            $cityNameFr = $this->filter->getCityFrName($request->city);
        }
        if ($request->topic) {
            $topicNameFr = $this->filter->getTopicFrName($request->topic);
        }
        if ($request->month) {
            $monthNameFr = $this->filter->getMonthFrName($request->month);
        }

        $events = $this->getEvent->advanceSearchEvents($request->keyword, $request->country, $request->city, $request->topic, $request->month);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-fr.advance-search', compact('events', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'countryNameFr', 'cityNameFr', 'topicNameFr', 'monthNameFr'));
    }
}
