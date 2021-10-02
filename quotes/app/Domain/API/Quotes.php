<?php

namespace App\Domain\Api;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use App\Domain\Quote;

class Quotes {
    public static function fetch($count) {
        $quoteData = Http::get("https://ron-swanson-quotes.herokuapp.com/v2/quotes/$count")->json();

        return $quoteData;
    }
}