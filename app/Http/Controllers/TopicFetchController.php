<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use Illuminate\Http\Request;

class TopicFetchController extends Controller
{

    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    public function countryApi(Request $request)
    {
        ini_set('max_execution_time', 6000);
        $topicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();

        $topicCountry = [];
        foreach ($topCountry as $countryUrl => $countryName) {
            foreach ($topicList as $topic => $subTopic) {
                foreach ($subTopic as $subTopicUrl => $subTopicName) {
                    $subTopicUrl =  str_replace("-", " ", $subTopicUrl);

                    $result = EventTable::where('country', str_replace("-", " ", $countryUrl))->where('sub_topic', 'like', "%{$subTopicUrl}%")->exists();

                    if ($result) {
                        $subtopic[$subTopicUrl] = $subTopicName;
                    }
                }
                $topicList[$topic] = $subtopic;
            }
            $topicCountry[$countryUrl] = $topicList;
        }
        dd($topicCountry);
    }
}
