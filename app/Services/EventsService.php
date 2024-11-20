<?php

namespace App\Services;

use App\Models\EventTable;

class EventsService
{

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

        // topic name not matched to data base so here changed as per data base topic name
        if ($topic == "e commerce") {
            $topic = str_replace("e commerce", "e-commerce", $topic);
        }
        if ($topic == "e learning") {
            $topic = str_replace("e learning", "e-learning", $topic);
        }

        return EventTable::where(function ($query) use ($topic) {
            $query->where('sub_topic', 'LIKE', "%{$topic}%")
                ->orWhere('topic', 'like', "%{$topic}%");
        })->orderBy('sdate')
            ->paginate(50);
    }

    public function topicMonthEvents($topic, $month)
    {

        // topic name not matched to data base so here changed as per data base topic name
        if ($topic == "e commerce") {
            $topic = str_replace("e commerce", "e-commerce", $topic);
        }
        if ($topic == "e learning") {
            $topic = str_replace("e learning", "e-learning", $topic);
        }

        return EventTable::where('month', 'like', "%{$month}%")->where(function ($query) use ($topic) {
            $query->where('sub_topic', 'LIKE', "%{$topic}%")
                ->orWhere('topic', 'like', "%{$topic}%");
        })->orderBy('sdate')
            ->paginate(50);
    }

    ///////////////////////////////////////// ------------> MONTH PAGES <------------- ///////////////////////////////////////

    public function monthEvents($month)
    {
        return EventTable::where('month', 'like', "%{$month}%")->orderBy('sdate')
            ->paginate(50);
    }

    ///////////////////////////////////////// ------------> ADVANCE SEARCH PAGES <------------- ///////////////////////////////////////

    public function advanceSearchEvents($keyword)
    {

        $importantWords = ['conference', 'international', 'Upcoming', 'virtual', 'upcoming', 'conferences', 'and', 'in', 'events', 'event'];
        $keywords = explode(' ', str_replace(',', ' ', $keyword));
        $searchConditions = [];
        $allIgnored = true;

        $searchConditions[] = "country = 'usa'";

        // if ($request->cities) {
        //     $searchConditions[] = "city LIKE '%{$request->cities}%'";
        // }

        // if ($request->topic) {
        //     $searchConditions[] = "(topic LIKE '%$request->topic%' OR sub_topic LIKE '%$request->topic%')";
        // }

        // if ($request->month) {
        //     $searchConditions[] = "month LIKE '%{$request->month}%'";
        // }

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

        return EventTable::whereRaw($searchQuery)->orderBy('sdate')->paginate(50);
    }

    ///////////////////////////////////////// ------------> EVENT DETAILS PAGES <------------- ///////////////////////////////////////

    public function eventDetailsEvents($event_id)
    {
        $events = EventTable::where('event_id', $event_id)->get();

        $similarEventName = EventTable::where('event_name', $events[0]->event_name)
            ->where('country', $events[0]->country)->where('event_id', '!=', $event_id)
            ->orderBy('sdate')
            ->limit(20)
            ->get();

        $similarCountryEvent = EventTable::where('country', $events[0]->country)
            ->orderBy('sdate')->where('event_id', '!=', $event_id)
            ->limit(20)
            ->get();

        return [$events, $similarEventName, $similarCountryEvent];
    }
}
