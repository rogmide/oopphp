<?php

namespace App\Interfaces;

require 'DebtCollector.php';

class CollectionAgency implements DebtCollector
{

    // public function __construct()
    // {
    // }

    public function collect($owedAmount)
    {
        $guarnteed = $owedAmount * 0.5;
        return mt_rand($guarnteed, $owedAmount);
    }
}
