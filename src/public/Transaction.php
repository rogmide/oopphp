<?php

// Name the class as same of the file name
// one class per file
// Class
class Transaction
{
    // access modefier, public, private, protected, static
    private float $amount;
    private string $description;

    // Constructor
    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

    public function applyDiscount($rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    // can be use to close connections
    // clean up files and stuff
    // we see if this has a usecase for it
    public function __destruct()
    {
        // echo 'Desctruct ' . $this->description . '<br />';
    }
}
