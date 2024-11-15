<?php

namespace App\Services;

use App\Models\EventTable;
use Carbon\Carbon;

class UpCommingEventService
{
    public function cityUpcomingEvents($city)
    {
        $nextMonth = Carbon::now()->addMonth();
        $firstDate = $nextMonth->startOfMonth()->format('Y-m-d');
        $lastDate = $nextMonth->endOfMonth()->format('Y-m-d');

        return EventTable::where('city', $city)
            ->whereBetween('sdate', [$firstDate, $lastDate])
            ->orderBy('sdate')
            ->limit(3)
            ->get();
    }

    public function countryUpcomingEvents($country)
    {
        $nextMonth = Carbon::now()->addMonth();
        $firstDate = $nextMonth->startOfMonth()->format('Y-m-d');
        $lastDate = $nextMonth->endOfMonth()->format('Y-m-d');

        return EventTable::where('country', $country)
            ->whereBetween('sdate', [$firstDate, $lastDate])
            ->orderBy('sdate')
            ->limit(3)
            ->get();
    }

    public function topicUpcomingEvents($topic)
    {
        $nextMonth = Carbon::now()->addMonth();
        $firstDate = $nextMonth->startOfMonth()->format('Y-m-d');
        $lastDate = $nextMonth->endOfMonth()->format('Y-m-d');

        return  EventTable::where(function ($query) use ($topic) {
            $query->where('sub_topic', 'LIKE', "%{$topic}%")
                ->orWhere('topic', 'like', "%{$topic}%");
        })->whereBetween('sdate', [$firstDate, $lastDate])->orderBy('sdate')->limit(3)
            ->get();
    }

    public function monthUpcomingEvents($month)
    {
        $nextMonth = Carbon::now()->addMonth();
        $firstDate = $nextMonth->startOfMonth()->format('Y-m-d');
        $lastDate = $nextMonth->endOfMonth()->format('Y-m-d');

        return  EventTable::where('month', 'like', "%{$month}%")->whereBetween('sdate', [$firstDate, $lastDate])->orderBy('sdate')->limit(3)
            ->get();
    }
}
