<?php

namespace App\Http\Controllers;

use App\Events\ContactEvent;
use App\Events\GoogleSheetEvent;
use App\Http\Controllers\Controller;
use App\Models\IndexSubscription;
use App\Rules\Recaptcha;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    public function contactPage()
    {
        $topicList = $this->filter->topicSubtopicList();
        $countryWithCity = $this->filter->countryWithCity();

        return view('pages-en.contact', compact('topicList', 'countryWithCity'));
    }

    public function contactForm(Request $request)
    {

        $validatedData = $request->validate([
            'captcha' => ['required', new Recaptcha]
        ]);

        $index = new IndexSubscription();
        $index->name = $request->name;
        $index->email = $request->email;
        $index->mobile_no = $request->mobile_no;
        $index->country = $request->country;
        $index->topic = $request->topic;
        $index->status = '';
        $index->index_id = '22';
        $index->source = 'Genral Contact';
        $index->save();

        // for mail
        event(new ContactEvent($index));

        // for google sheet
        $formData = [
            'Date' => now()->format('Y-m-d'),
            'Name' => $request->input('name'),
            'Email' => $request->input('email'),
            'Mobile_number' => $request->input('mobile_no'),
            'Country' => $request->input('country'),
            'Topic' => $request->input('topic'),
            'Source' => 'General Contact',
        ];

        event(new GoogleSheetEvent($formData));

        return redirect()->back()->with('smessage', 'Thank You for Contacting Us, we will be contact u soon.');
    }
}
