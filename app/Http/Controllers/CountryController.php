<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    public function countryPage(Request $request)
    {
        $country = str_replace("-", " ", $request->country);

        $monthList = $this->filter->monthList();
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();

        $events = EventTable::where('country', $country)->orderBy('sdate')->paginate(50);

        $nextMonth = Carbon::now()->addMonth();
        $firstDate = $nextMonth->startOfMonth()->format('Y-m-d');
        $lastDate = $nextMonth->endOfMonth()->format('Y-m-d');

        $upcomingEvent = EventTable::where('country', $country)
            ->whereBetween('sdate', [$firstDate, $lastDate])
            ->orderBy('sdate', 'ASC')
            ->limit(3)
            ->get();

        if ($request->ajax()) {
            $response = [
                'eventsAjax' => view('components-en.event-listing', compact('events'))->render(),
                'loadMore' => view('components-en.load-more', compact('events'))->render(),
            ];
            return response()->json($response);
        }

        return view('pages-en.country', compact('events', 'upcomingEvent', 'topCountry', 'topicList', 'countryWithCity', 'monthList'));
    }
}
