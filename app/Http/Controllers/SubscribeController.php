<?php

namespace App\Http\Controllers;

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

		return redirect()->back()->with('smessage', 'Thanks for contacting us! Our Executive will contact you shortly through mail or call regarding your conference-related information.While you’re here, check our upcoming conferences.');
	}
}
