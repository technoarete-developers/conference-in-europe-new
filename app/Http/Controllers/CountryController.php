<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use App\Services\UpCommingEventService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    protected $filter, $upcomingEvent;

    public function __construct(JsonFetchDataController $filter, UpCommingEventService $upcomingEvent)
    {
        $this->filter = $filter;
        $this->upcomingEvent = $upcomingEvent;
    }


    public function countryPage(Request $request)
    {
        $country = str_replace("-", " ", $request->country);

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events = EventTable::where('country', $country)->orderBy('sdate')->paginate(50);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.country', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'monthList'));
    }


    public function countryTopicPage(Request $request)
    {
        $country = str_replace("-", " ", $request->country);
        $topic = str_replace("-", " ", $request->topic);

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events = EventTable::where('country', $country)
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

        return view('pages-en.country-topic', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'monthList'));
    }


    public function countryMonthPage(Request $request)
    {
        $country = str_replace("-", " ", $request->country);
        $month = $request->month;

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events = EventTable::where('country', $country)
            ->where('month', 'like', "%{$month}%")
            ->orderBy('sdate')
            ->paginate(50);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.country-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'monthList'));
    }

    public function countryTopicMonthPage(Request $request)
    {
        $country = str_replace("-", " ", $request->country);
        $topic = str_replace("-", " ", $request->topic);
        $month = $request->month;

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $upcomingEvent = $this->upcomingEvent->countryUpcomingEvents($country);

        $events = EventTable::where('country', $country)->where('month', 'like', "%{$month}%")
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

        return view('pages-en.country-topic-month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'monthList'));
    }
}
