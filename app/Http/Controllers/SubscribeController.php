<?php

namespace App\Http\Controllers;

use App\Events\EventDetailSubscribeEvent;
use App\Events\GoogleSheetEvent;
use App\Events\SubscribeEvent;
use App\Http\Controllers\Controller;
use App\Models\IndexSubscription;
use App\Rules\Recaptcha;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
	protected $filter;

	public function __construct(JsonFetchDataController $filter)
	{
		$this->filter = $filter;
	}

	///////////////////////////////////////// ------------> ENGLISH PAGES <------------- ///////////////////////////////////////

	public function subscribePage()
	{
		$topicStopicList = $this->filter->topicSubtopicList();
		$topicList = $this->filter->topicList();
		$topCountry = $this->filter->topCountry();
		$countryWithCity = $this->filter->countryWithCity();

		return view('pages-en.subscribe', compact('topicList', 'topicStopicList', 'topCountry', 'countryWithCity'));
	}

	///////////////////////////////////////// ------------> FRENCH PAGES <------------- ///////////////////////////////////////

	public function subscribePageFr()
	{
		$topicStopicList = $this->filter->topicSubtopicListFr();
		$topicList = $this->filter->topicListFr();
		$topCountry = $this->filter->topCountryFr();
		$countryWithCity = $this->filter->countryWithCityFr();

		return view('pages-fr.subscribe', compact('topicList', 'topicStopicList', 'topCountry', 'countryWithCity'));
	}

	///////////////////////////////////////// ------------> FORM STORE <------------- ///////////////////////////////////////

	public function subscribeForm(Request $request)
	{

		$validate = $request->validate([
			'captcha' => ['required', new Recaptcha]
		]);

		$subscription = new IndexSubscription();
		$subscription->name = $request->name;
		$subscription->email = $request->email;
		$subscription->mobile_no = $request->country_code . ' ' . $request->number;
		$subscription->topic = $request->topic;
		$subscription->category = $request->category;
		$subscription->country = $request->country;
		$subscription->city = $request->city;
		$subscription->university_org = $request->university_org;
		$subscription->status = '';
		$subscription->index_id = '22';
		$subscription->source = 'subscribe';
		$subscription->save();

		$formData = [
			'Date' => now()->format('Y-m-d'),
			'Name' => $request->name,
			'Email' => $request->email,
			'Country_code' => $request->country_code,
			'Mobile_number' => $request->number,
			'Country' => $request->country,
			'City' => $request->city,
			'Topic' => $request->topic,
			'Category' => $request->category,
			'University_org' => $request->university_org,
			'Source' => 'General Subscribe',
		];

		event(new GoogleSheetEvent($formData));

		event(new SubscribeEvent($subscription));

		if (app()->getLocale() == 'en') {
			return redirect()->back()->with('smessage', 'Thank You for Subscribe Us, we will be contact u soon');
		} else {
			return redirect()->back()->with('smessage', 'Merci de nous avoir abonnés, nous vous contacterons bientôt');
		}
	}

	public function footerSubscribeForm(Request $request)
	{

		$validate = $request->validate([
			'captcha' => ['required', new Recaptcha]
		]);

		$subscription = new IndexSubscription();
		$subscription->name = $request->name;
		$subscription->email = $request->email;
		$subscription->mobile_no = '';
		$subscription->topic = '';
		$subscription->category = $request->interest;
		$subscription->country = '';
		$subscription->city = '';
		$subscription->university_org = '';
		$subscription->status = '';
		$subscription->index_id = '22';
		$subscription->source = 'subscribe';
		$subscription->save();

		$formData = [
			'Date' => now()->format('Y-m-d'),
			'Name' => $request->name,
			'Email' => $request->email,
			'Country_code' => '',
			'Mobile_number' => '',
			'Country' => '',
			'City' => '',
			'Topic' => '',
			'Category' => $request->category,
			'University_org' => '',
			'Source' => 'General Subscribe',
		];

		event(new GoogleSheetEvent($formData));

		event(new SubscribeEvent($subscription));

		if (app()->getLocale() == 'en') {
			return redirect()->back()->with('smessage', 'Thank You for Subscribe Us, we will be contact u soon');
		} else {
			return redirect()->back()->with('smessage', 'Merci de nous avoir abonnés, nous vous contacterons bientôt');
		}
	}

	public function eventSubscribeForm(Request $request)
	{

		$validate = $request->validate([
			'captcha' => ['required', new Recaptcha]
		]);

		$eventSub = new IndexSubscription();
		$eventSub->name = $request->name;
		$eventSub->email = $request->email;
		$eventSub->mobile_no = $request->country_code . "-" . $request->mobile_number;
		$eventSub->topic = $request->topic;
		$eventSub->category = $request->category;
		$eventSub->country = $request->conference_country;
		$eventSub->university_org = $request->university_org;
		$eventSub->status = '';
		$eventSub->index_id = '22';
		$eventSub->source = 'event subscribe';
		$eventSub->save();

		// google sheet data
		$formData = [
			'Date' => now()->format('Y-m-d'),
			'Event_id' => $request->event_id,
			'Name' => $request->name,
			'Email' => $request->email,
			'Mobile_number' => $request->mobile_number,
			'Category' => $request->category,
			'Topic' => $request->topic,
			'Source' => 'event subscribe',
			'Conference_name' => $request->conference_name,
			'City' => $request->conference_city,
			'Country' => $request->conference_country,
			'Event_date' => $request->conference_date,
			'Conference_url' => $request->conference_url,
			'Papersubmission_url' => $request->paper_submission_url,
			'Registration_url' => $request->registration_url,
			'Rdead' => $request->conference_rdead,
			'Sdead' => $request->conference_sdead,
			'Contact_person' => $request->contact_person,
			'university_org' => $request->university_org,
		];

		event(new GoogleSheetEvent($formData));

		// email data
		$eventSubscribe = [
			'name' => $request->name,
			'email' => $request->email,
			'mobile_number' => $request->mobile_number,
			'category' => $request->category,
			'topic' => $request->topic,
			'source' => 'Event Subscribe',
			'conference_name' => $request->conference_name,
			'conference_title' => $request->conference_title,
			'conference_city' => $request->conference_city,
			'conference_country' => $request->conference_country,
			'conference_date' => $request->conference_date,
			'conference_url' => $request->conference_url,
			'paper_submission_url' => $request->paper_submission_url,
			'registration_url' => $request->registration_url,
			'conference_rdead' => $request->conference_rdead,
			'conference_sdead' => $request->conference_sdead,
			'contact_person' => $request->contact_person,
			'organization' => $request->organization,
			'contact_no' => $request->contact_no,
			'contact_email' => $request->contact_email,
			'university_org' => $request->university_org
		];
		
		event(new EventDetailSubscribeEvent($eventSubscribe));

		if (app()->getLocale() == 'en') {
			return redirect()->back()->with('smessage', 'Thank you for Subscribing');
		} else {
			return redirect()->back()->with('smessage', 'Merci de vous être abonné');
		}
	}
}
