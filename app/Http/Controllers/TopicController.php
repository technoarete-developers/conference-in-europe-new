<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use App\Services\EventsService;
use App\Services\UpCommingEventService;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    protected $filter, $upcomingEvent, $getEvent;

    public function __construct(JsonFetchDataController $filter, UpCommingEventService $upcomingEvent, EventsService $getEvent)
    {
        $this->filter = $filter;
        $this->upcomingEvent = $upcomingEvent;
        $this->getEvent = $getEvent;
    }

    ///////////////////////////////////////// ------------> ENGLISH PAGES <------------- ///////////////////////////////////////

    public function topicPage(Request $request)
    {
        $topic = str_replace("-", " ", $request->topic);

        $monthList = $this->filter->monthList();
        $topicStopicList = $this->filter->topicSubtopicList();
        $topicList = $this->filter->topicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $content = $this->filter->topicContent($request->topic);

        $upcomingEvent = $this->upcomingEvent->topicUpcomingEvents($topic);

        $events = $this->getEvent->topicEvents($topic);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.topic', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content'));
    }

    public function topicMonthPage(Request $request)
    {
        $topic = str_replace("-", " ", $request->topic);
        $month = $request->month;

        $monthList = $this->filter->monthList();
        $topicStopicList = $this->filter->topicSubtopicList();
        $topicList = $this->filter->topicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $content = $this->filter->topicMonthContent($request->topic, $request->month);
        $upcomingEvent = $this->upcomingEvent->topicUpcomingEvents($topic);

        $events = $this->getEvent->topicMonthEvents($topic, $month);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.topic-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content'));
    }


    ///////////////////////////////////////// ------------> FRENCH PAGES <------------- ///////////////////////////////////////

    public function topicPageFr(Request $request)
    {
        $topic = str_replace("-", " ", $request->topic);

        $monthList = $this->filter->monthListFr();
        $topicStopicList = $this->filter->topicSubtopicListFr();
        $topicList = $this->filter->topicListFr();
        $topCountry = $this->filter->topCountryFr();
        $countryWithCity = $this->filter->countryWithCityFr();
        $content = $this->filter->topicContentFr($request->topic);

        $upcomingEvent = $this->upcomingEvent->topicUpcomingEvents($topic);

        $events = $this->getEvent->topicEvents($topic);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-fr.topic', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content'));
    }

    public function topicMonthPageFr(Request $request)
    {
        $topic = str_replace("-", " ", $request->topic);
        $month = $request->month;

        $monthList = $this->filter->monthListFr();
        $topicStopicList = $this->filter->topicSubtopicListFr();
        $topicList = $this->filter->topicListFr();
        $topCountry = $this->filter->topCountryFr();
        $countryWithCity = $this->filter->countryWithCityFr();
        $content = $this->filter->topicMonthContentFr($request->topic, $request->month);

        $upcomingEvent = $this->upcomingEvent->topicUpcomingEvents($topic);

        $events = $this->getEvent->topicMonthEvents($topic, $month);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-fr.topic-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'topicStopicList', 'countryWithCity', 'monthList', 'content'));
    }
}
