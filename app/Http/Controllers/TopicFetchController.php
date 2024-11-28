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
        $topicSubtopicList = $this->filter->topicSubtopicList();
        $topCountry = $this->filter->topCountry();

        $topicCountry = [];
        foreach ($topCountry as $countryUrl => $countryName) {

            $filterTopic = [];

            foreach ($topicSubtopicList as $mainTopic => $subTopicList) {

                $subTopicUrls = array_map(fn($url) => str_replace("-", " ", $url), array_keys($subTopicList));

                $existingSubtopics = EventTable::where('country', $countryUrl)
                    ->whereIn('sub_topic', $subTopicUrls)
                    ->whereNotNull('sub_topic')
                    ->distinct()
                    ->pluck('sub_topic');

                $subtopic = [];

                foreach ($existingSubtopics as $stopicList) {
                    $subTopicUrl = strtolower(trim($stopicList));
                    if (array_key_exists($subTopicUrl, $subTopicList)) {
                        $subtopic[$subTopicUrl] = $subTopicList[$subTopicUrl];
                    }
                }

                $filterTopic[$mainTopic] = $subtopic;
            }
            $topicCountry[$countryUrl] = $filterTopic;
            dd($topicCountry);
        }
        
    }
}
