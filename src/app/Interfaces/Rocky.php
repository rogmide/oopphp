<?php

namespace App\Interfaces;

require '../Interfaces/DebtCollector.php';

class Rocky implements DebtCollector
{
    public function collect($owedAmount)
    {
        return $owedAmount * 0.65;
    }
}
