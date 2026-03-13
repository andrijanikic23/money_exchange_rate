<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ExchangeRatesService {


    public static function availableCurrency(): array
    {
        $response = Http::get("https://v6.exchangerate-api.com/v6/". env("API_KEY") ."/codes");
        return $response->json()["supported_codes"];
    }

    public static function getRate(string $from, string $to): float
    {
        $response = Http::get("https://v6.exchangerate-api.com/v6/". env("API_KEY") ."pair/". $from. "/" .$to);
        return $response->json()['conversion_rate'];
    }


}
