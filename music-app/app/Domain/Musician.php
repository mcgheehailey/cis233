<?php

namespace App\Domain;

class Musician {

    public $first_name, $last_name, $instrument, $website;
 

    public function __construct($first_name, $last_name, $instrument, $website,) {
        // $this->quote = $quote;
    }

    public function __toString() {
        return "\"$this->quote\"";
    }

}