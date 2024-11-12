<?php

namespace App\Listeners;

use App\Events\AddEventGoogleSheetEvent;
use Illuminate\Support\Facades\Http;

class AddEventGoogleSheetListener
{
    
    public function handle(AddEventGoogleSheetEvent $event)
    {
        $formData = $event->data;
        
        $webAppUrl = config('services.google_sheet.web_url_addevent');

        Http::asForm()->post($webAppUrl, $formData);
    }
}
