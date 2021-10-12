<?php

namespace App\Domain\Api;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use App\Domain\Quote;
use App\Models\Musician;

class Musicians {
    public static function fetch() {
        $musiciansData =  Musician::all();

        return $musiciansData;
    }
}