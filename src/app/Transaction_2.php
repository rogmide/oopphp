<?php

namespace App\Transaction_2;

class Transaction
{

    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function process()
    {
        echo 'Processing $' . $this->amount . ' transaction';

        $this->sendEmail();

        $this->generateReceipt();
    }

    public function getAmount()
    {

        return $this->amount;
    }

    // Some time we use this
    // public function setAmount($amount)
    // {
    //     $this->amount = $amount;
    // }

    private function sendEmail()
    {
        echo '<br />';
        echo 'we can access this in the same class';
    }
    private function generateReceipt()
    {
    }
}
