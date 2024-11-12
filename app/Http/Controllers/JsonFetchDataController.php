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
}
