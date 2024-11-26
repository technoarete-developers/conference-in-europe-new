<?php

namespace App\Services;

use App\Models\EventTable;
use Carbon\Carbon;

class UpCommingEventService
{
    private function getNextMonthDateRange()
    {
        $firstDate = Carbon::now()->addMonth()->startOfMonth()->format('Y-m-d');
        $lastDate = Carbon::now()->addMonth(5)->endOfMonth()->format('Y-m-d');

        return [$firstDate, $lastDate];
    }


    public function cityUpcomingEvents($city)
    {
        [$firstDate, $lastDate] = $this->getNextMonthDateRange();

        return EventTable::where('city', $city)
            ->whereBetween('sdate', [$firstDate, $lastDate])
            ->orderBy('sdate')
            ->limit(3)
            ->get();
    }

    public function countryUpcomingEvents($country)
    {
        [$firstDate, $lastDate] = $this->getNextMonthDateRange();

        return EventTable::where('country', $country)
            ->whereBetween('sdate', [$firstDate, $lastDate])
            ->orderBy('sdate')
            ->limit(3)
            ->get();
    }

    public function topicUpcomingEvents($topic)
    {
        [$firstDate, $lastDate] = $this->getNextMonthDateRange();

        return  EventTable::where(function ($query) use ($topic) {
            $query->where('sub_topic', 'LIKE', "%{$topic}%")
                ->orWhere('topic', 'like', "%{$topic}%");
        })->whereBetween('sdate', [$firstDate, $lastDate])->orderBy('sdate')->limit(3)
            ->get();
    }

    public function monthUpcomingEvents($month)
    {
        [$firstDate, $lastDate] = $this->getNextMonthDateRange();

        return  EventTable::where('month', 'like', "%{$month}%")->whereBetween('sdate', [$firstDate, $lastDate])->orderBy('sdate')->limit(3)
            ->get();
    }

}
