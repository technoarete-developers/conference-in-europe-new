<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class JsonFetchDataController extends Controller
{

    //////////////////////////////////////// -------> ENGLISH CITY, TOPIC, COUNTRY LIST FUNCTIONS <------- ///////////////////////////////////////

    // used for using city get country name
    public function getCountry($city)
    {

        $jsonData = file_get_contents(public_path('json-en/country-with-city.json'));

        $data = json_decode($jsonData, true);

        foreach ($data as $country => $cityList) {
            foreach ($cityList as $key => $value) {
                if ($city == $key) {
                    $countryName = $country;
                    break 2;
                }
            }
        }

        return $countryName;
    }


    // cites list
    public function topCity()
    {
        $jsonData = file_get_contents(public_path('json-en/city.json'));

        $data = json_decode($jsonData, true);

        $topCity = $data;

        return $topCity;
    }

    //topic list
    public function topicList()
    {
        $jsonData = file_get_contents(public_path('json-en/topic.json'));

        $data = json_decode($jsonData, true);

        return $data;
    }

    //topic and subtopic list
    public function topicSubtopicList()
    {
        $jsonData = file_get_contents(public_path('json-en/topic-with-subtopic.json'));

        $data = json_decode($jsonData, true);

        return $data;
    }

    //continent and country list
    public function topCountry()
    {

        $jsonData = file_get_contents(public_path('json-en/country.json'));

        $data = json_decode($jsonData, true);

        return $data;
    }

    //  country and city list
    public function countryWithCity()
    {

        $jsonData = file_get_contents(public_path('json-en/country-with-city.json'));

        $data = json_decode($jsonData, true);

        return $data;
    }


    //  month list
    public function monthList()
    {
        $jsonData = json_decode(file_get_contents(public_path('json-en/month.json')), true);

        $currentMonth = strtolower(date('F'));

        $monthKeys = array_keys($jsonData);

        $currentMonthIndex = array_search($currentMonth, $monthKeys);

        $orderedMonths = array_merge(
            array_slice($jsonData, $currentMonthIndex),
            array_slice($jsonData, 0, $currentMonthIndex)
        );

        return $orderedMonths;
    }


    //////////////////////////////////////////// ------------> ENGLISH CONTENT FUNCTIONS <------------- ///////////////////////////////////////

    //country content
    public function countryContent($country)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/country.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$country])) {
            $content = $data[$country];
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //country month content
    public function countryMonthContent($country, $month)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/country-month.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$month])) {
            if (isset($data[$month][$country])) {
                $content = $data[$country];
            } else {
                $content = $data[$month]['default'];
            }
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //country topic content
    public function countryTopicContent($country, $topic)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/country-topic.json'));

        $data = json_decode($jsonData, true);

        // if (isset($data[$topic])) {
        //     if (isset($data[$topic][$country])) {
        //         $content = $data[$topic][$country];
        //     } else {
        //         $content = $data[$topic];
        //     }
        // } else {
        //     $content = $data['default'];
        // }

        if (isset($data[$topic])) {
            $content = $data[$topic];
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //country topic month content
    public function countryTopicMonthContent($country, $topic, $month)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/country-topic-month.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$month])) {
            if (isset($data[$month][$topic])) {
                if (isset($data[$month][$topic][$country])) {
                    $content = $data[$month][$topic][$country];
                } else {
                    $content = $data[$month][$topic]['default'];
                }
            } else {
                $content = $data[$month]['default'];
            }
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //city page content
    public function cityContent($city)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/city.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$city])) {
            $content = $data[$city];
        } else {
            $content = $data['default'];
        }

        return $content;
    }

    //cities and topic page content
    public function cityTopicContent($city, $topic)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/city-topic.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$city])) {
            if (isset($data[$city][$topic])) {
                $content = $data[$city][$topic];
            } else {
                $content = $data[$city]['default'];
            }
        } else {
            $content = $data['default'];
        }

        return $content;
    }

    //cities and month page content
    public function cityMonthContent($city, $month)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/city-month.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$month])) {
            $content = $data[$month];
        } else {
            $content = $data['default'];
        }

        return $content;
    }

    //cities and topic and month page content
    public function cityTopicMonthContent($city, $topic, $month)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/city-topic-month.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$month])) {
            if (isset($data[$month][$topic])) {
                if (isset($data[$month][$topic][$city])) {
                    $content = $data[$month][$topic][$city];
                } else {
                    $content = $data[$month][$topic]['default'];
                }
            } else {
                $content = $data[$month]['default'];
            }
        } else {
            $content = $data['default'];
        }


        return $content;
    }

    //topic page content
    public function topicContent($topic)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/topic.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$topic])) {
            $content = $data[$topic];
        } else {
            $content = $data['default'];
        }

        return $content;
    }

    //topic and month page content
    public function topicMonthContent($topic, $month)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/topic-month.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$month])) {
            if (isset($data[$month][$topic])) {
                $content = $data[$month][$topic];
            } else {
                $content = $data[$month]['default'];
            }
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //month page content
    public function monthContent($month)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/month.json'));

        $data = json_decode($jsonData, true);


        if (isset($data[$month])) {
            $content = $data[$month];
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //////////////////////////////////////// -------> FRENCH CITY, TOPIC, COUNTRY LIST FUNCTIONS <------- ///////////////////////////////////////

    // used for using city get country name
    public function getCountryFr($city)
    {

        $jsonData = file_get_contents(public_path('json-en/country-with-city.json'));

        $countryCity = json_decode($jsonData, true);

        foreach ($countryCity as $country => $cityList) {
            foreach ($cityList as $key => $value) {
                if ($city == $key) {
                    $countryName = $country;
                    break 2;
                }
            }
        }

        return $countryName;
    }

    // get country french name
    public function getCountryFrName($country)
    {

        $jsonData = file_get_contents(public_path('json-fr/country.json'));

        $countryCity = json_decode($jsonData, true);

        if (array_key_exists($country, $countryCity)) {
            $countryFrName = $countryCity[$country];
        }

        return $countryFrName;
    }

    // get city french name
    public function getCityFrName($city)
    {

        $jsonData = file_get_contents(public_path('json-en/country-with-city.json'));

        $countryCity = json_decode($jsonData, true);

        foreach ($countryCity as $country => $cityList) {
            if (array_key_exists($city, $cityList)) {
                $cityNameFr = $cityList[$city];
                break;
            }
        }

        return $cityNameFr;
    }

    // get topic french name
    public function getTopicFrName($topic)
    {

        $jsonSubtopic = file_get_contents(public_path('json-fr/topic-with-subtopic.json'));

        $topicSubtopic = json_decode($jsonSubtopic, true);

        $jsonTopic = file_get_contents(public_path('json-fr/topic.json'));

        $topicList = json_decode($jsonTopic, true);

        if ($topicList[$topic]) {
            $topicNameFr = $topicList[$topic];
        } else {
            foreach ($topicSubtopic as $topics => $subtopicList) {
                if (array_key_exists($topic, $subtopicList)) {
                    $topicNameFr = $subtopicList[$topic];
                    break;
                }
            }
        }

        return $topicNameFr;
    }

    // get month french name
    public function getMonthFrName($month)
    {

        $jsonData = file_get_contents(public_path('json-fr/month.json'));

        $monthList = json_decode($jsonData, true);

        if (array_key_exists($month, $monthList)) {
            $monthNameFr = $monthList[$month];
        }

        return $monthNameFr;
    }

    // cites list
    public function topCityFr()
    {
        $jsonData = file_get_contents(public_path('json-fr/city.json'));

        $data = json_decode($jsonData, true);

        $topCity = $data;

        return $topCity;
    }

    //topic list
    public function topicListFr()
    {
        $jsonData = file_get_contents(public_path('json-fr/topic.json'));

        $data = json_decode($jsonData, true);

        return $data;
    }

    //topic and subtopic list
    public function topicSubtopicListFr()
    {
        $jsonData = file_get_contents(public_path('json-fr/topic-with-subtopic.json'));

        $data = json_decode($jsonData, true);

        return $data;
    }

    //continent and country list
    public function topCountryFr()
    {

        $jsonData = file_get_contents(public_path('json-fr/country.json'));

        $data = json_decode($jsonData, true);

        return $data;
    }

    //  country and city list
    public function countryWithCityFr()
    {

        $jsonData = file_get_contents(public_path('json-fr/country-with-city.json'));

        $data = json_decode($jsonData, true);

        return $data;
    }


    //  month list
    public function monthListFr()
    {

        $jsonData = file_get_contents(public_path('json-fr/month.json'));

        $jsonData = json_decode($jsonData, true);

        $currentMonth = strtolower(date('F'));

        $monthKeys = array_keys($jsonData);

        $currentMonthIndex = array_search($currentMonth, $monthKeys);

        $orderedMonths = array_merge(
            array_slice($jsonData, $currentMonthIndex),
            array_slice($jsonData, 0, $currentMonthIndex)
        );

        return $orderedMonths;
    }


    ///////////////////////////////////////// ------------> FRENCH CONTENT FUNCTIONS <------------- ///////////////////////////////////////

    //country content
    public function countryContentFr($country)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/country.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$country])) {
            $content = $data[$country];
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //country month content
    public function countryMonthContentFr($country, $month)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/country-month.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$month])) {
            if (isset($data[$month][$country])) {
                $content = $data[$month][$country];
            } else {
                $content = $data[$month]['default'];
            }
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //country topic content
    public function countryTopicContentFr($country, $topic)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/country-topic.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$topic])) {
            if (isset($data[$topic][$country])) {
                $content = $data[$country];
            } else {
                $content = $data[$topic]['default'];
            }
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //country topic month content
    public function countryTopicMonthContentFr($country, $topic, $month)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/country-topic-month.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$month])) {
            if (isset($data[$month][$topic])) {
                if (isset($data[$month][$topic][$country])) {
                    $content = $data[$month][$topic][$country];
                } else {
                    $content = $data[$month][$topic]['default'];
                }
            } else {
                $content = $data[$month]['default'];
            }
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //city page content
    public function cityContentFr($city)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/city.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$city])) {
            $content = $data[$city];
        } else {
            $content = $data['default'];
        }

        return $content;
    }

    //cities and topic page content
    public function cityTopicContentFr($city, $topic)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/city-topic.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$topic])) {
            if (isset($data[$topic][$city])) {
                $content = $data[$city];
            } else {
                $content = $data[$topic]['default'];
            }
        } else {
            $content = $data['default'];
        }

        return $content;
    }

    //cities and month page content
    public function cityMonthContentFr($city, $month)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/city-month.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$month])) {
            if (isset($data[$month][$city])) {
                $content = $data[$city];
            } else {
                $content = $data[$month]['default'];
            }
        } else {
            $content = $data['default'];
        }

        return $content;
    }

    //cities and topic and month page content
    public function cityTopicMonthContentFr($city, $topic, $month)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/city-topic-month.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$month])) {
            if (isset($data[$month][$topic])) {
                if (isset($data[$month][$topic][$city])) {
                    $content = $data[$month][$topic][$city];
                } else {
                    $content = $data[$month][$topic]['default'];
                }
            } else {
                $content = $data[$month]['default'];
            }
        } else {
            $content = $data['default'];
        }


        return $content;
    }

    //topic page content
    public function topicContentFr($topic)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/topic.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$topic])) {
            $content = $data[$topic];
        } else {
            $content = $data['default'];
        }

        return $content;
    }

    //topic and month page content
    public function topicMonthContentFr($topic, $month)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/topic-month.json'));

        $data = json_decode($jsonData, true);

        if (isset($data[$month])) {
            if (isset($data[$month][$topic])) {
                $content = $data[$topic];
            } else {
                $content = $data[$month]['default'];
            }
        } else {
            $content = $data['default'];
        }

        return $content;
    }


    //month page content
    public function monthContentFr($month)
    {

        $jsonData = file_get_contents(public_path('json-fr/contents/month.json'));

        $data = json_decode($jsonData, true);


        if (isset($data[$month])) {
            $content = $data[$month];
        } else {
            $content = $data['default'];
        }

        return $content;
    }
}
