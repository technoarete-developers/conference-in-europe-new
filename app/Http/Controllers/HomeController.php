<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    ///////////////////////////////////////// ------------> ENGLISH PAGES <------------- ///////////////////////////////////////

    public function homePage()
    {
        $monthList = $this->filter->monthList();
        $topCity = $this->filter->topCity();
        $topicList = $this->filter->topicList();
        $topCountry = $this->filter->topCountry();

        return view('pages-en.home', compact('monthList', 'topCity', 'topicList', 'topCountry'));
    }

    public function topicListPage()
    {
        $topicStopicList = $this->filter->topicSubtopicList();
        $topicList = $this->filter->topicList();

        return view('pages-en.topic-list', compact('topicStopicList','topicList'));
    }

    public function journalPage()
    {
        $scopus_json = file_get_contents('https://www.ardaconference.com/journals/scopus-indexed/scopus_journal.json');
        $scopus_data = json_decode($scopus_json, true);
        $ugc_json = file_get_contents('https://www.ardaconference.com/journals/ugc-care-list/ugc_journal.json');
        $ugc_data = json_decode($ugc_json, true);
        $web_json = file_get_contents('https://www.ardaconference.com/journals/web-of-science/esciweb_journal.json');
        $web_data = json_decode($web_json, true);
        $google_json = file_get_contents('https://www.ardaconference.com/journals/google-scholar/google_scholar_journal.json');
        $google_data = json_decode($google_json, true);
        $whole_data = [$scopus_data, $ugc_data, $web_data, $google_data];
        $tab_title = ["SCOPUS INDEXED JOURNALS", "UGC CARE LIST JOURNALS", "WEB OF SCIENCE JOURNALS", "GOOGLE SCHOLAR JOURNALS"];

        return view('pages-en.journal', compact('whole_data', 'tab_title'));
    }

    ///////////////////////////////////////// ------------> FRENCH PAGES <------------- ///////////////////////////////////////

    public function homePageFr()
    {
        $monthList = $this->filter->monthListFr();
        $topCity = $this->filter->topCityFr();
        $topicList = $this->filter->topicListFr();
        $topCountry = $this->filter->topCountryFr();

        return view('pages-fr.home', compact('monthList', 'topCity', 'topicList', 'topCountry'));
    }

    public function topicListPageFr()
    {
        $topicStopicList = $this->filter->topicSubtopicListFr();
        $topicList = $this->filter->topicListFr();

        return view('pages-fr.topic-list', compact('topicList', 'topicStopicList'));
    }

    public function journalPageFr()
    {
        $scopus_json = file_get_contents('https://www.ardaconference.com/journals/scopus-indexed/scopus_journal.json');
        $scopus_data = json_decode($scopus_json, true);
        $ugc_json = file_get_contents('https://www.ardaconference.com/journals/ugc-care-list/ugc_journal.json');
        $ugc_data = json_decode($ugc_json, true);
        $web_json = file_get_contents('https://www.ardaconference.com/journals/web-of-science/esciweb_journal.json');
        $web_data = json_decode($web_json, true);
        $google_json = file_get_contents('https://www.ardaconference.com/journals/google-scholar/google_scholar_journal.json');
        $google_data = json_decode($google_json, true);
        $whole_data = [$scopus_data, $ugc_data, $web_data, $google_data];
        $tab_title = ["SCOPUS INDEXED JOURNALS", "UGC CARE LIST JOURNALS", "WEB OF SCIENCE JOURNALS", "GOOGLE SCHOLAR JOURNALS"];

        return view('pages-fr.journal', compact('whole_data', 'tab_title'));
    }
}
