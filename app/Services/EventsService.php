<?php

namespace App\Services;

use App\Http\Controllers\JsonFetchDataController;
use App\Models\EventTable;
use Carbon\Carbon;

class EventsService
{
    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    ///////////////////////////////////////// ------------> CITY PAGES <------------- ///////////////////////////////////////

    public function cityEvents($city)
    {
        return EventTable::where('city', $city)->orderBy('sdate')->paginate(50);
    }

    public function cityTopicEvents($city, $topic)
    {

        // topic name not matched to data base so here changed as per data base topic name
        if ($topic == "e commerce") {
            $topic = str_replace("e commerce", "e-commerce", $topic);
        }
        if ($topic == "e learning") {
            $topic = str_replace("e learning", "e-learning", $topic);
        }

        return EventTable::where('city', $city)
            ->where(function ($query) use ($topic) {
                $query->where('sub_topic', 'LIKE', "%{$topic}%")
                    ->orWhere('topic', 'like', "%{$topic}%");
            })->orderBy('sdate')
            ->paginate(50);
    }

    public function cityMonthEvents($city, $month)
    {
        return EventTable::where('city', $city)->where('month', 'like', "%{$month}%")->orderBy('sdate')->paginate(50);
    }

    public function cityTopicMonthEvents($city, $topic, $month)
    {
        // topic name not matched to data base so here changed as per data base topic name
        if ($topic == "e commerce") {
            $topic = str_replace("e commerce", "e-commerce", $topic);
        }
        if ($topic == "e learning") {
            $topic = str_replace("e learning", "e-learning", $topic);
        }

        return EventTable::where('city', $city)->where('month', 'like', "%{$month}%")
            ->where(function ($query) use ($topic) {
                $query->where('sub_topic', 'LIKE', "%{$topic}%")
                    ->orWhere('topic', 'like', "%{$topic}%");
            })->orderBy('sdate')
            ->paginate(50);
    }

    ///////////////////////////////////////// ------------> COUNTRY PAGES <------------- ///////////////////////////////////////

    public function countryEvents($country)
    {
        return EventTable::where('country', $country)->orderBy('sdate')->paginate(50);
    }

    public function countryTopicEvents($country, $topic)
    {

        // topic name not matched to data base so here changed as per data base topic name
        if ($topic == "e commerce") {
            $topic = str_replace("e commerce", "e-commerce", $topic);
        }
        if ($topic == "e learning") {
            $topic = str_replace("e learning", "e-learning", $topic);
        }

        return EventTable::where('country', $country)
            ->where(function ($query) use ($topic) {
                $query->where('sub_topic', 'LIKE', "%{$topic}%")
                    ->orWhere('topic', 'like', "%{$topic}%");
            })->orderBy('sdate')
            ->paginate(50);
    }

    public function countryMonthEvents($country, $month)
    {
        return EventTable::where('country', $country)
            ->where('month', 'like', "%{$month}%")
            ->orderBy('sdate')
            ->paginate(50);
    }

    public function countryTopicMonthEvents($country, $topic, $month)
    {

        // topic name not matched to data base so here changed as per data base topic name
        if ($topic == "e commerce") {
            $topic = str_replace("e commerce", "e-commerce", $topic);
        }
        if ($topic == "e learning") {
            $topic = str_replace("e learning", "e-learning", $topic);
        }

        return EventTable::where('country', $country)->where('month', 'like', "%{$month}%")
            ->where(function ($query) use ($topic) {
                $query->where('sub_topic', 'LIKE', "%{$topic}%")
                    ->orWhere('topic', 'like', "%{$topic}%");
            })->orderBy('sdate')
            ->paginate(50);
    }

    ///////////////////////////////////////// ------------> TOPIC PAGES <------------- ///////////////////////////////////////

    public function topicEvents($topic)
    {
        $topCountry = $this->filter->topCountry();

        // topic name not matched to data base so here changed as per data base topic name
        if ($topic == "e commerce") {
            $topic = str_replace("e commerce", "e-commerce", $topic);
        }
        if ($topic == "e learning") {
            $topic = str_replace("e learning", "e-learning", $topic);
        }

        return EventTable::whereIn('country', $topCountry)->where(function ($query) use ($topic) {
            $query->where('sub_topic', 'LIKE', "%{$topic}%")
                ->orWhere('topic', 'like', "%{$topic}%");
        })->orderBy('sdate')
            ->paginate(50);
    }

    public function topicMonthEvents($topic, $month)
    {
        $topCountry = $this->filter->topCountry();

        // topic name not matched to data base so here changed as per data base topic name
        if ($topic == "e commerce") {
            $topic = str_replace("e commerce", "e-commerce", $topic);
        }
        if ($topic == "e learning") {
            $topic = str_replace("e learning", "e-learning", $topic);
        }

        return EventTable::whereIn('country', $topCountry)->where('month', 'like', "%{$month}%")->where(function ($query) use ($topic) {
            $query->where('sub_topic', 'LIKE', "%{$topic}%")
                ->orWhere('topic', 'like', "%{$topic}%");
        })->orderBy('sdate')
            ->paginate(50);
    }

    ///////////////////////////////////////// ------------> MONTH PAGES <------------- ///////////////////////////////////////

    public function monthEvents($month)
    {

        $topCountry = $this->filter->topCountry();

        return EventTable::whereIn('country', $topCountry)->where('month', 'like', "%{$month}%")->orderBy('sdate')
            ->paginate(50);
    }

    ///////////////////////////////////////// ------------> ADVANCE SEARCH PAGES <------------- ///////////////////////////////////////

    public function advanceSearchEvents($keyword, $country, $city, $topic, $month)
    {
        $country = str_replace('-', ' ', $country);
        $city = str_replace('-', ' ', $city);
        $topic = str_replace('-', ' ', $topic);
        $month = str_replace('-', ' ', $month);

        $topCountry = $this->filter->topCountry();

        $importantWords = ['conference', 'international', 'Upcoming', 'virtual', 'upcoming', 'conferences', 'and', 'in', 'events', 'event'];
        $keywords = explode(' ', str_replace(',', ' ', $keyword));
        $searchConditions = [];

        if ($city) {
            $searchConditions[] = "city LIKE '%{$city}%'";
        }

        if ($country) {
            $searchConditions[] = "country LIKE '%{$country}%'";
        }

        if ($topic) {
            $searchConditions[] = "(topic LIKE '%$topic%' OR sub_topic LIKE '%$topic%')";
        }

        if ($month) {
            $searchConditions[] = "month LIKE '%{$month}%'";
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

        return EventTable::whereIn('country', $topCountry)->whereRaw($searchQuery)->orderBy('sdate')->paginate(50);
    }

    ///////////////////////////////////////// ------------> EVENT DETAILS PAGES <------------- ///////////////////////////////////////

    public function eventDetailsEvents($event_id)
    {
        $topCountry = $this->filter->topCountry();

        $nextMonthStart = Carbon::now()->addMonth()->startOfMonth()->format('Y-m-d');
        $afterThreeMonthsLastDate = Carbon::now()->addMonth(5)->endOfMonth()->format('Y-m-d');

        $events = EventTable::where('event_id', $event_id)->get();

        $similarEventName = EventTable::whereIn('country', $topCountry)->where('event_name', $events[0]->event_name)
            ->where('event_id', '!=', $event_id)
            ->whereBetween('sdate', [$nextMonthStart, $afterThreeMonthsLastDate])
            ->orderBy('sdate')
            ->limit(20)
            ->get();

        $similarCountryEvent = EventTable::whereIn('country', $topCountry)->where('country', $events[0]->country)
            ->orderBy('sdate')->where('event_id', '!=', $event_id)
            ->whereBetween('sdate', [$nextMonthStart, $afterThreeMonthsLastDate])
            ->orderBy('sdate')
            ->limit(20)
            ->get();

        return [$events, $similarEventName, $similarCountryEvent];
    }
}
