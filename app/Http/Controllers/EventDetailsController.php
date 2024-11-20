<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use App\Services\EventsService;
use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    protected $getEvent;

    public function __construct(EventsService $getEvent)
    {
        $this->getEvent = $getEvent;
    }


    public function eventDetailPage(Request $request)
    {

        [$events, $similarEventName, $similarCountryEvent] = $this->getEvent->eventDetailsEvents($request->event_id);

        $breadcrumbs = generateBreadcrumb($events[0]->country, $events[0]->city, $events[0]->topic, $events[0]->month);

        return view('pages-en.event-detail', compact('events', 'similarEventName', 'similarCountryEvent', 'breadcrumbs'));
    }

    public function eventDetailPageFr(Request $request)
    {

        [$events, $similarEventName, $similarCountryEvent] = $this->getEvent->eventDetailsEvents($request->event_id);

        $breadcrumbs = generateBreadcrumb($events[0]->country, $events[0]->city, $events[0]->topic, $events[0]->month);

        return view('pages-en.event-detail', compact('events', 'similarEventName', 'similarCountryEvent', 'breadcrumbs'));
    }
}
