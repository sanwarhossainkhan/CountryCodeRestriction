<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\IPRestriction;
use Illuminate\Support\Facades\Http;


class CountryCodeRestriction
{

    public function handle(Request $request, Closure $next)
    {
        $allowedCountries = ['BD', 'CA']; // Add your allowed country codes here
        $response = Http::get('https://api.ipify.org?format=json');
        $visitorIp = $response->json('ip');
        $response = Http::get('https://freeipapi.com/api/json/{$visitorIp}');
        $ipInfo = json_decode($response, true);

        $country=$ipInfo['countryCode'];

        if (!in_array($country, $allowedCountries)) {
            IPRestriction::create([
                'ip' => $visitorIp,
                'country_code' => $country,
                'restricted' => false,

            ]);

            abort(403, 'Access denied from your country.');
        }

        IPRestriction::create([
            'ip' => $visitorIp,
            'country_code' => $country,
            'restricted' => true,
        ]);

        return $next($request);
    }
}
