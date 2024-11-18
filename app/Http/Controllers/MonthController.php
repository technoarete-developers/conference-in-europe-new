<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use App\Services\UpCommingEventService;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    protected $filter, $upcomingEvent;

    public function __construct(JsonFetchDataController $filter, UpCommingEventService $upcomingEvent)
    {
        $this->filter = $filter;
        $this->upcomingEvent = $upcomingEvent;
    }


    public function monthPage(Request $request)
    {
        $month = $request->month;

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $content = $this->filter->monthContent($request->month);
        $upcomingEvent = $this->upcomingEvent->monthUpcomingEvents($month);

        $events = EventTable::where('month', 'like', "%{$month}%")->orderBy('sdate')
            ->paginate(50);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.month', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'monthList', 'content'));
    }
}
