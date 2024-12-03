<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use App\Services\EventsService;
use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    protected $filter, $getEvent;

    public function __construct(JsonFetchDataController $filter, EventsService $getEvent)
    {
        $this->getEvent = $getEvent;
        $this->filter = $filter;
    }


    public function eventDetailPage(Request $request)
    {

        [$events, $similarEventName, $similarCountryEvent] = $this->getEvent->eventDetailsEvents($request->event_id);

        $countryNameFr = $this->filter->getCountryFrName(strtolower(str_replace(" ", "-", $events->country)));
        $breadcrumbs = generateBreadcrumb($events->country, $events->city, $events->topic, $events->month);

        if (app()->getLocale() == 'en') {
            return view('pages-en.event-detail', compact('events', 'similarEventName', 'similarCountryEvent', 'breadcrumbs'));
        } else {
            return view('pages-fr.event-detail', compact('events', 'similarEventName', 'similarCountryEvent', 'breadcrumbs', 'countryNameFr'));
        }
    }
}
