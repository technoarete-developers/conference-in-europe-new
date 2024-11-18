<?php

if (!function_exists('generateBreadcrumb')) {
    function generateBreadcrumb($country, $city, $topic, $month)
    {
        $breadcrumbs = [];

        // Home breadcrumb
        $breadcrumbs[] = ['title' => 'Home', 'url' => route('home')];

        //country
        if ($country) {
            $breadcrumbs[] = [
                'title' => ucfirst($country), 'url' => route('country-page', ['country' => strtolower(str_replace(" ", "-", $country))])];
        }

        //cities
        if ($city) {
            $breadcrumbs[] = [
                'title' => ucfirst($city), 'url' => route('city-page', ['city' => strtolower(str_replace(" ", "-", $city))])];
        }

        if ($topic) {
            //subtopic name
    
            $topic = str_replace("Topics", "", $topic); 
            $topic = explode(',', $topic); 
            $topic = str_replace("\n", "", $topic);

            $breadcrumbs[] = ['title' => ucfirst($topic[0]), 'url' => route('topic-page', ['topic' => strtolower(str_replace(" ", "-", $topic[0]))])];
        }

        //month
        if ($month) {
            $timestamp = strtotime($month);
            $monthName = date('F', $timestamp);

            $breadcrumbs[] = ['title' => ucfirst($monthName), 'url' => route('month-page', ['month' => strtolower(str_replace(" ", "-", $monthName))])];
        }

        return $breadcrumbs;
    }
}
