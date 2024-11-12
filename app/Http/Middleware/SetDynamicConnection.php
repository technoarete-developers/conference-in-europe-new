<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Config;

class SetDynamicConnection
{
    public function handle(Request $request, Closure $next): Response
    {
        if (in_array($request->ip(), ['127.0.0.1', '::1'])) {
            // data base local
            Config::set('database.default', 'local_my_sql');

            // captcha local
            Config::set('services.recaptcha.site_key', config('services.recaptcha_local.site_key'));
            Config::set('services.recaptcha.secret_key', config('services.recaptcha_local.secret_key'));

            // google sheet local
            Config::set('services.google_sheet.web_url', config('services.google_sheet_test.web_url'));
            Config::set('services.google_sheet.web_url_addevent', config('services.google_sheet_test.web_url_addevent'));
        } else {
            if (str_contains($request->url(), 'test.')) {
                // data base test
                Config::set('database.default', 'test_my_sql');

                // captcha test
                Config::set('services.recaptcha.site_key', config('services.recaptcha_test.site_key'));
                Config::set('services.recaptcha.secret_key', config('services.recaptcha_test.secret_key'));

                // google sheet test
                Config::set('services.google_sheet.web_url', config('services.google_sheet_test.web_url'));
                Config::set('services.google_sheet.web_url_addevent', config('services.google_sheet_test.web_url_addevent'));
            } else {
                // data base production
                Config::set('database.default', 'production_my_sql');

                // captcha production
                Config::set('services.recaptcha.site_key', config('services.recaptcha_production.site_key'));
                Config::set('services.recaptcha.secret_key', config('services.recaptcha_production.secret_key'));

                // google sheet production
                Config::set('services.google_sheet.web_url', config('services.google_sheet_production.web_url'));
                Config::set('services.google_sheet.web_url_addevent', config('services.google_sheet_production.web_url_addevent'));
            }
        }

        return $next($request);
    }
}
