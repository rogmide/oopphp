<?php

namespace App\Interfaces;

class CollectionAgency implements DebtCollector
{

    public function __construct()
    {
    }

    public function collect($owedAmount)
    {
        return 1.2;
    }
}
