<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EventTable;
use Illuminate\Http\Request;

class FilterApiController extends Controller
{
    protected $filter;

    public function __construct(JsonFetchDataController $filter)
    {
        $this->filter = $filter;
    }

    public function getSubtopicApi(Request $request)
    {
        $topicList = $this->filter->topicSubtopicList();

        $content_json = $request->getContent();

        $content = json_decode($content_json, true);

        $locationColumn = $content['slectedType'];

        $locationValue = str_replace("-", " ", $content['data']);

        $filterTopic = [];

        foreach ($topicList as $mainTopic => $subTopicList) {

            $subTopicUrls = array_map(fn($url) => str_replace("-", " ", $url), array_keys($subTopicList));

            $existingSubtopics = EventTable::where($locationColumn, $locationValue)
                ->whereIn('sub_topic', $subTopicUrls)
                ->whereNotNull('sub_topic')
                ->distinct()
                ->pluck('sub_topic');

            $subtopic = [];

            foreach ($existingSubtopics as $stopicList) {
                $subTopicUrl = strtolower(trim(str_replace(" ","-",$stopicList)));
                if (array_key_exists($subTopicUrl, $subTopicList)) {
                    $subtopic[$subTopicUrl] = $subTopicList[$subTopicUrl];
                }
            }

            $filterTopic[$mainTopic] = $subtopic;
        }

        return $filterTopic;
    }

    public function getSubtopicApiFr(Request $request)
    {
        $topicList = $this->filter->topicSubtopicListFr();

        $content_json = $request->getContent();
        $content = json_decode($content_json, true);

        $locationColumn = $content['slectedType'];

        $locationValue = str_replace("-", " ", $content['data']);

        $filterTopic = [];

        foreach ($topicList as $mainTopic => $subTopicList) {

            $subTopicUrls = array_map(fn($url) => str_replace("-", " ", $url), array_keys($subTopicList));

            $existingSubtopics = EventTable::where($locationColumn, $locationValue)
                ->whereIn('sub_topic', $subTopicUrls)
                ->whereNotNull('sub_topic')
                ->distinct()
                ->pluck('sub_topic');

            $subtopic = [];

            foreach ($existingSubtopics as $stopicList) {
                $subTopicUrl = strtolower(trim(str_replace(" ","-",$stopicList)));
                if (array_key_exists($subTopicUrl, $subTopicList)) {
                    $subtopic[$subTopicUrl] = $subTopicList[$subTopicUrl];
                }
            }

            $filterTopic[$mainTopic] = $subtopic;
        }
        return $filterTopic;
    }
}
