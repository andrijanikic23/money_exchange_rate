<?php

namespace App\Http\Controllers;

use App\Services\ExchangeRatesService;
use Illuminate\Http\Request;


class ExchangeRateController extends Controller
{
    public function index()
    {
        $rates = ExchangeRatesService::availableCurrency();
        return view('welcome', compact('rates'));
    }

    public function getRequestedRate(Request $request)
    {
        $rate = ExchangeRatesService::getRate($request['from'], $request['in']);
        return view('displayResult', compact('rate'));
    }
}
