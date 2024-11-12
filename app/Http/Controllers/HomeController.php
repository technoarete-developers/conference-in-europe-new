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


    public function homePage()
    {
        $topCity = $this->filter->topCity();
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();

        return view('pages-en.home', compact('topCity', 'topicList', 'topCountry'));
    }

    public function topicPage()
    {
        $topicList = $this->filter->topicSubtopicList();

        return view('pages-en.topic-list', compact('topicList'));
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
}
