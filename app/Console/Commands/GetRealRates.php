<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GetRealRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-real-rates {baseCurrency} {targetCurrency}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetching different money rates';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $baseCurrency = $this->argument('baseCurrency');
        $targetCurrency = $this->argument("targetCurrency");
        $response = Http::get("https://v6.exchangerate-api.com/v6/". env("API_KEY") ."/latest/". $baseCurrency);
        $jsonResponse = $response->json();
        return $jsonResponse['conversion_rates'][$targetCurrency];
    }
}
