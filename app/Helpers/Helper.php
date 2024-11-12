<?php

// if (!function_exists('generateBreadcrumb')) {
//     function generateBreadcrumb($cities, $topic, $month)
//     {
//         $breadcrumbs = [];

//         // Home breadcrumb
//         $breadcrumbs[] = ['title' => 'Home', 'url' => route('home')];

//         // Check for cities
//         if ($cities) {
//             $breadcrumbs[] = ['title' => ucfirst($cities), 'url' => route('cities', ['cities' => strtolower(str_replace(" ", "-", $cities))])];
//         }

//         if ($topic) {
//             //subtopic name

//             $topic = str_replace("Topics", "", $topic); 
//             $topic = explode(',', $topic); 
//             $topic = str_replace("\n", "", $topic);

//             $breadcrumbs[] = ['title' => ucfirst($topic[0]), 'url' => route('topic', ['topic' => strtolower(str_replace(" ", "-", $topic[0]))])];
//         }

//         // Check for month
//         if ($month) {
//             $month = 'August-2024';
//             $timestamp = strtotime($month);
//             $monthName = date('F', $timestamp);

//             $breadcrumbs[] = ['title' => ucfirst($monthName), 'url' => route('month', ['month' => strtolower(str_replace(" ", "-", $monthName))])];
//         }

//         return $breadcrumbs;
//     }
// }

