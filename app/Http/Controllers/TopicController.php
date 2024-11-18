<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use App\Services\UpCommingEventService;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    protected $filter, $upcomingEvent;

    public function __construct(JsonFetchDataController $filter, UpCommingEventService $upcomingEvent)
    {
        $this->filter = $filter;
        $this->upcomingEvent = $upcomingEvent;
    }


    public function topicPage(Request $request)
    {
        $topic = str_replace("-", " ", $request->topic);

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $content = $this->filter->topicContent($request->topic);
        $upcomingEvent = $this->upcomingEvent->topicUpcomingEvents($topic);

        $events = EventTable::where(function ($query) use ($topic) {
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

        return view('pages-en.topic', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'monthList', 'content'));
    }

    public function topicMonthPage(Request $request)
    {
        $topic = str_replace("-", " ", $request->topic);
        $month = $request->month;

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $content = $this->filter->topicMonthContent($request->topic, $request->month);
        $upcomingEvent = $this->upcomingEvent->topicUpcomingEvents($topic);

        $events = EventTable::where('month', 'like', "%{$month}%")->where(function ($query) use ($topic) {
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

        return view('pages-en.topic-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'monthList', 'content'));
    }
}
