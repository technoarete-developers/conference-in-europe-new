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

        $countryNames = array_map(fn($url) => str_replace("-", " ", $url), array_keys($topCountry));
        $subTopicUrls = [];

        foreach ($topicList as $subTopics) {
            foreach ($subTopics as $subTopicUrl => $subTopicName) {
                $subTopicUrls[] = str_replace("-", " ", $subTopicUrl);
            }
        }

        $events = EventTable::whereIn('country', $countryNames)
            ->where(function ($query) use ($subTopicUrls) {
                foreach ($subTopicUrls as $subTopicUrl) {
                    $query->orWhere('sub_topic', 'like', "%{$subTopicUrl}%");
                }
            })
            ->get(['country', 'sub_topic']);

        $topicCountry = [];
        foreach ($topCountry as $countryUrl => $countryName) {
            $filteredTopicList = [];
            foreach ($topicList as $topic => $subTopics) {
                $subtopic = [];
                foreach ($subTopics as $subTopicUrl => $subTopicName) {
                    $subTopicUrlFormatted = str_replace("-", " ", $subTopicUrl);

                    $eventExists = $events->contains(function ($event) use ($countryUrl, $subTopicUrlFormatted) {
                        return $event->country === str_replace("-", " ", $countryUrl) &&
                            str_contains($event->sub_topic, $subTopicUrlFormatted);
                    });

                    if ($eventExists) {
                        $subtopic[$subTopicUrl] = $subTopicName;
                    }
                }
                $filteredTopicList[$topic] = $subtopic;
            }
            $topicCountry[$countryUrl] = $filteredTopicList;
        }

        dd($topicCountry);
    }
}
