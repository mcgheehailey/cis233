<?php

namespace App\Domain;

class Quote {

    public $author, $quote;
 

    public function __construct($author, $quote) {
        $this->quote = $quote;
    }

    public function __toString() {
        return "\"$this->quote\"";
    }

}