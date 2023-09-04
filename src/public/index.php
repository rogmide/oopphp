<?php

// phpinfo();

require_once 'Transaction.php';

// $transaction = (new Transaction(100, 'Transaction 1'))
//     ->addTax(8)
//     ->applyDiscount(10);;

// chainning methos
$amount = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();

// access to the properties
// $transaction->addTax(8);
// $transaction->applyDiscount(10);
// $transaction->addTax(8)->applyDiscount(10);

// var_dump($transaction->getAmount());
var_dump($amount);
