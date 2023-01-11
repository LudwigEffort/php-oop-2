<?php

class CreditCard {
    private $number;
    private $cvc;
    private $expiry;

    public function __construct($number, $cvc, $expiry)
    {
        $this->number = $number;
        $this->cvc = $cvc;
        $this->expiry = $expiry;
    }
}

