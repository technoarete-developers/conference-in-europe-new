<?php

namespace App\Http\Controllers;

use App\Events\AddEvent;
use App\Events\AddEventGoogleSheetEvent;
use App\Http\Controllers\Controller;
use App\Models\OutsideEvent;
use Illuminate\Http\Request;
use App\Rules\Recaptcha;

class AddEventController extends Controller
{

    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    ///////////////////////////////////////// ------------> ENGLISH PAGES <------------- ///////////////////////////////////////

    public function addEventPage(Request $request)
    {
        $topicStopicList = $this->filter->topicSubtopicList();
        $topicList = $this->filter->topicList();
        $topCountry = $this->filter->topCountry();
        $countryWithCity = $this->filter->countryWithCity();
        $monthList = $this->filter->monthList();

        return view('pages-en.add-event', compact('topicList', 'topicStopicList', 'topCountry', 'countryWithCity', 'monthList'));
    }

    ///////////////////////////////////////// ------------> FRENCH PAGES <------------- ///////////////////////////////////////

    public function addEventPageFr(Request $request)
    {
        $topicStopicList = $this->filter->topicSubtopicListFr();
        $topicList = $this->filter->topicListFr();
        $topCountry = $this->filter->topCountryFr();
        $countryWithCity = $this->filter->countryWithCityFr();
        $monthList = $this->filter->monthListFr();

        return view('pages-fr.add-event', compact('topicList', 'topicStopicList', 'topCountry', 'countryWithCity', 'monthList'));
    }


    ///////////////////////////////////////// ------------> FORM STORE <------------- ///////////////////////////////////////

    public function addEventForm(Request $request)
    {
        $validate = $request->validate([
            'captcha' => ['required', new Recaptcha]
        ]);

        $addEvent = new OutsideEvent();
        $addEvent->event_name = $request->event_name;
        $addEvent->title = $request->title;
        $addEvent->type = $request->type;
        $addEvent->topic = $request->topic;
        $addEvent->sub_topic = $request->sub_topic;
        $addEvent->country = $request->country;
        $addEvent->state = $request->state;
        $addEvent->city = $request->city;
        $addEvent->venue_address = $request->venue_address;
        $addEvent->org = $request->org;
        $addEvent->contact_person = $request->contact_person;
        $addEvent->contact_no = $request->country_code . ' ' . $request->contact_no;
        $addEvent->contact_email = $request->contact_email;
        $addEvent->url = $request->url;
        $addEvent->month = $request->month;
        $addEvent->sdate = $request->sdate;
        $addEvent->edate = $request->edate;
        $addEvent->rdead = $request->rdead;
        $addEvent->sdead = $request->sdead;
        $addEvent->des = $request->des;
        $addEvent->call_for_paper = 'No call for paper';
        $addEvent->event_location = 'outside';
        $addEvent->index_id = '22';
        $addEvent->status = 'pending';
        $addEvent->save();

        // for mail
        event(new AddEvent($addEvent));

        // for google sheet
        $formData = [
            'site name' => 'Conference in Europe',
            'eventsubmitdate' => now()->format('Y-m-d'),
            'eventname' => $request->input('event_name'),
            'eventtitle' => $request->input('title'),
            'eventtype' => $request->input('type'),
            'topic' => $request->input('topic'),
            'subtopic' => $request->input('sub_topic'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'venue' => $request->input('venue_address'),
            'organizingsociety' => $request->input('org'),
            'contactperson' => $request->input('contact_person'),
            'exphone' => $request->input('country_code'),
            'number' => $request->input('contact_no'),
            'email' => $request->input('contact_email'),
            'url' => $request->input('url'),
            'month' => $request->input('month'),
            'eventstartdate' => $request->input('sdate'),
            'lastdayofevent' => $request->input('edate'),
            'rdead' => $request->input('rdead'),
            'deadlineforabstracts' => $request->input('sdead'),
        ];

        event(new AddEventGoogleSheetEvent($formData));

        if (app()->getLocale() == 'en') {
            return redirect()->back()->with('smessage', 'Thanks for contacting us! Our Executive will contact you shortly through mail or call regarding your conference-related information.While you’re here, check our upcoming conferences.');
        } else {
            return redirect()->back()->with('smessage', 'Merci de nous avoir contactés ! Notre exécutif vous contactera sous peu par courrier ou par téléphone au sujet des informations relatives à votre conférence. Pendant que vous êtes ici, consultez nos conférences à venir.');
        }
    }
}
