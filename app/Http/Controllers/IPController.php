<?php

namespace App\Http\Controllers;

use App\Models\IPRestriction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class IPController extends Controller
{
    public function getVisitorPublicIp()
    {
//        $allowedCountries = ['BD', 'CA']; // Add your allowed country codes here
//        $response = Http::get('https://api.ipify.org?format=json');
//        $visitorIp = $response->json('ip');
//        $response = Http::get('https://freeipapi.com/api/json/{$visitorIp}');
//        $ipInfo = json_decode($response, true);
//
//        $country=$ipInfo['countryCode'];
//
//        if (!in_array($country, $allowedCountries)) {
//            IPRestriction::create([
//                'ip' => $visitorIp,
//                'country_code' => $country,
//                'restricted' => true,
//            ]);
//
//            abort(403, 'Access denied from your country.');
//        }
//
//        IPRestriction::create([
//            'ip' => $visitorIp,
//            'country_code' => $country,
//            'restricted' => false,
//        ]);
//        return "Visitor's Public IP: $country";
    }
}
