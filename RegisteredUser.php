<?php

include_once __DIR__ . '/User.php';

class RegisteredUser extends User {
    protected $discount = 20;

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}