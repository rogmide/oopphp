<?php

// phpinfo();

require_once 'Transaction.php';

// $transaction = (new Transaction(100, 'Transaction 1'))
//     ->addTax(8)
//     ->applyDiscount(10);;

// chainning methos
$transaction1 = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);
// ->getAmount();

// $transaction2 = (new Transaction(200, 'Transaction 1'))
//     ->addTax(8)
//     ->applyDiscount(15);
// ->getAmount();

// access to the properties
// $transaction->addTax(8);
// $transaction->applyDiscount(10);
// $transaction->addTax(8)->applyDiscount(10);

// var_dump($transaction->getAmount());
// var_dump($transaction1->getAmount(), $transaction2->getAmount());

// var_dump($transaction1);

$str = '{"a":1, "b":2, "c":3}';

$obj = json_decode($str);

// var_dump($obj);
var_dump($obj->a);
echo '<br />';
var_dump($obj->b);
echo '<br />';
var_dump($obj->c);
