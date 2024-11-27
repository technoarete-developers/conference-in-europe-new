<?php

namespace App\Services;

use App\Http\Controllers\JsonFetchDataController;
use App\Models\EventTable;
use Carbon\Carbon;

class UpCommingEventService
{

    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    private function getNextMonthDateRange()
    {
        $firstDate = Carbon::now()->addMonth()->startOfMonth()->format('Y-m-d');
        $lastDate = Carbon::now()->addMonth(5)->endOfMonth()->format('Y-m-d');

        return [$firstDate, $lastDate];
    }


    public function cityUpcomingEvents($city)
    {
        $topCountry = $this->filter->topCountry();

        [$firstDate, $lastDate] = $this->getNextMonthDateRange();

        return EventTable::whereIn('country', $topCountry)->where('city', $city)
            ->whereBetween('sdate', [$firstDate, $lastDate])
            ->orderBy('sdate')
            ->limit(6)
            ->get();
    }

    public function countryUpcomingEvents($country)
    {
        [$firstDate, $lastDate] = $this->getNextMonthDateRange();

        return EventTable::where('country', $country)
            ->whereBetween('sdate', [$firstDate, $lastDate])
            ->orderBy('sdate')
            ->limit(6)
            ->get();
    }

    public function topicUpcomingEvents($topic)
    {
        $topCountry = $this->filter->topCountry();

        [$firstDate, $lastDate] = $this->getNextMonthDateRange();

        return  EventTable::whereIn('country', $topCountry)->where(function ($query) use ($topic) {
            $query->where('sub_topic', 'LIKE', "%{$topic}%")
                ->orWhere('topic', 'like', "%{$topic}%");
        })->whereBetween('sdate', [$firstDate, $lastDate])->orderBy('sdate')->limit(6)
            ->get();
    }

    public function monthUpcomingEvents($month)
    {
        $topCountry = $this->filter->topCountry();

        [$firstDate, $lastDate] = $this->getNextMonthDateRange();

        return  EventTable::whereIn('country', $topCountry)->where('month', 'like', "%{$month}%")->whereBetween('sdate', [$firstDate, $lastDate])->orderBy('sdate')->limit(6)
            ->get();
    }
}
