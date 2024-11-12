<?php

namespace App\Listeners;

use App\Events\GoogleSheetEvent;
use Illuminate\Support\Facades\Http;

class GoogleSheetListner
{
    public function handle(GoogleSheetEvent $event)
    {
        $formData = $event->data;
        
        $webAppUrl = config('services.google_sheet.web_url');

        Http::asForm()->post($webAppUrl, $formData);
    }
}
