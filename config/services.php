<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // recaptcha
    // local
    'recaptcha_local' => [
        'site_key' => env('RECAPTCHA_SITE_KEY_LOCAL'),
        'secret_key' => env('RECAPTCHA_SECRET_KEY_LOCAL'),
    ],

    // test
    'recaptcha_test' => [
        'site_key' => env('RECAPTCHA_SITE_KEY_TEST'),
        'secret_key' => env('RECAPTCHA_SECRET_KEY_TEST'),
    ],

    // production
    'recaptcha_production' => [
        'site_key' => env('RECAPTCHA_SITE_KEY_PRODUCTION'),
        'secret_key' => env('RECAPTCHA_SECRET_KEY_PRODUCTION'),
    ],

    // google sheet
    // test and local
    'google_sheet_test' => [
        'web_url' => env('GOOGLE_SHEET_WEB_URL_TEST'),
        'web_url_addevent' => env('GOOGLE_SHEET_WEB_URL_ADDEVENT_TEST'),
    ],

    // production
    'google_sheet_production' => [
        'web_url' => env('GOOGLE_SHEET_WEB_URL_PRODUCTION'),
        'web_url_addevent' => env('GOOGLE_SHEET_WEB_URL_ADDEVENT_PRODUCTION'),
    ],

];
