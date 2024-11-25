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
        try {
            $topicList = $this->filter->topicSubtopicList();

            $content_json = $request->getContent();
            $content = json_decode($content_json, true);
            foreach ($topicList as $main_topic => $sub_topic) {

                $subtopicName = [];

                if ($content['slectedType'] == 'city_select') {
                    $result = EventTable::where('city', str_replace("-", " ", $content['data']))->whereIn('sub_topic', $sub_topic)
                        ->select('topic', 'sub_topic')
                        ->orderBy('sub_topic', 'asc')
                        ->get();
                } else {
                    $result = EventTable::where('country', str_replace("-", " ", $content['data']))->whereIn('sub_topic', $sub_topic)
                        ->select('topic', 'sub_topic')
                        ->orderBy('sub_topic', 'asc')
                        ->get();
                }

                foreach ($result as $subtopic) {
                    $explode_subtopic = explode(',', $subtopic->sub_topic);
                    foreach ($explode_subtopic as $sub_topic_explode) {
                        if (!in_array(trim($sub_topic_explode), $subtopicName) && $sub_topic_explode != "") {
                            $stopic = strtolower(str_replace(" ", "-", trim($sub_topic_explode)));
                            $subtopicName[$stopic] = $sub_topic_explode;
                        }
                    }
                }

                $filterTopic[$main_topic] = $subtopicName;
            }

            return $filterTopic;
        } catch (\Exception $e) {
            $failure['response']['message'] = 'Exception:' . $e->getMessage() . ' | Line: ' . $e->getLine();
            return $failure;
        }
    }

    public function getSubtopicApiFr(Request $request)
    {
        try {
            $topicList = $this->filter->topicSubtopicListFr();

            // $content_json = $request->getContent();
            // $content = json_decode($content_json, true);

            // foreach ($topicList as $mainTopic => $subTopicList) {
            //     $subtopic = [];
            //     foreach ($subTopicList as $subTopicUrl => $sTopicFr) {
            //         $subTopicUrls = str_replace("-", " ", $subTopicUrl);
            //         $result = EventTable::where('country', str_replace("-", " ", $content['data']))->where('sub_topic', 'like', "%{$subTopicUrls}%")->exists();

            //         if ($result) {
            //             $subtopic[$subTopicUrl] = $sTopicFr;
            //         }
            //     }
            //     $filterTopic[$mainTopic] = $subtopic;
            // }
            return $topicList;
        } catch (\Exception $e) {
            $failure['response']['message'] = 'Exception:' . $e->getMessage() . ' | Line: ' . $e->getLine();
            return $failure;
        }
    }
}
