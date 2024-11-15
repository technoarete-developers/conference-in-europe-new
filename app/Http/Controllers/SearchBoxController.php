<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use App\Services\UpCommingEventService;
use Illuminate\Http\Request;

class SearchBoxController extends Controller
{
    protected $filter, $upcomingEvent;

    public function __construct(JsonFetchDataController $filter, UpCommingEventService $upcomingEvent)
    {
        $this->filter = $filter;
        $this->upcomingEvent = $upcomingEvent;
    }


    public function advanceSerachPage(Request $request)
    {

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();

        $importantWords = ['conference', 'international', 'Upcoming', 'virtual', 'upcoming', 'conferences', 'and', 'in', 'events', 'event'];
        $keywords = explode(' ', str_replace(',', ' ', $request->keyword));
        $searchConditions = [];
        $allIgnored = true;

        $searchConditions[] = "country = 'usa'";

        if ($request->cities) {
            $searchConditions[] = "city LIKE '%{$request->cities}%'";
        }

        if ($request->topic) {
            $searchConditions[] = "(topic LIKE '%$request->topic%' OR sub_topic LIKE '%$request->topic%')";
        }

        if ($request->month) {
            $searchConditions[] = "month LIKE '%{$request->month}%'";
        }

        foreach ($keywords as $word) {
            $word = trim($word);

            if (!in_array($word, $importantWords)) {

                $wordConditions = [
                    "country LIKE '%$word%'",
                    "state LIKE '%$word%'",
                    "city LIKE '%$word%'",
                    "topic LIKE '%$word%'",
                    "sub_topic LIKE '%$word%'",
                    "org LIKE '%$word%'",
                    "event_name LIKE '%$word%'",
                    "event_title LIKE '%$word%'",
                    "event_id LIKE '%$word%'",
                    "month LIKE '%$word%'",
                    "sdate LIKE '%$word%'"
                ];
                $searchConditions[] = "(" . implode(" OR ", $wordConditions) . ")";
            }
        }


        $searchQuery = implode(' AND ', $searchConditions);

        $events = EventTable::whereRaw($searchQuery)->orderBy('sdate')->paginate(50);

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.advance-search', compact('events', 'topCountry', 'topicList', 'countryWithCity', 'monthList'));
    }
}
