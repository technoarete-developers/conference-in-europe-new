<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    public function eventDetailPage(Request $request){

        $events = EventTable::where('event_id', $request->event_id)->get();

        $breadcrumbs = generateBreadcrumb($events[0]->country, $events[0]->city, $events[0]->topic, $events[0]->month);

       
        $similarEventName = EventTable::where('event_name', $events[0]->event_name)
            ->where('country', $events[0]->country)->where('event_id', '!=', $request->event_id)
            ->orderBy('sdate')
            ->limit(20)
            ->get();

        $similarCountryEvent = EventTable::where('country', $events[0]->country)
            ->orderBy('sdate')->where('event_id', '!=', $request->event_id)
            ->limit(20)
            ->get();

        return view('pages-en.event-detail', compact('events', 'similarEventName', 'similarCountryEvent', 'breadcrumbs'));
    }
}
