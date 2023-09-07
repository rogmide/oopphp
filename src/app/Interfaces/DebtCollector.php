<?php

namespace App\Interfaces;

interface DebtCollector
{
    public function __construct();
    public function collect($owedAmount);
}
