<?php

class Transaction_1
{
    private  $amount;
    private  $description;

    // Constructor
    public function __construct(
        $amount,
        $description
    ) {
        $this->amount = $amount;
        $this->description = $description;
    }
}
