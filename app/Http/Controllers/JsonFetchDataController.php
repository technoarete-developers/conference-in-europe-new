<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class JsonFetchDataController extends Controller
{
    // cites list
    public function topCity()
    {
        $jsonData = file_get_contents(public_path('json-en/city.json'));

        $data = json_decode($jsonData, true);

        $topCity = $data;

        return $topCity;
    }

    //topic and subtopic list
    public function topicSubtopicList()
    {
        $jsonData = file_get_contents(public_path('json-en/topic.json'));

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

    // used for using city get country name
    public function currentCountry($city)
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


    // content

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
    public function cityMonthContent($city, $month)
    {

        $jsonData = file_get_contents(public_path('json-en/contents/city-month.json'));

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
}
