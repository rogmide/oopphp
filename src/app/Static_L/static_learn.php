<?php

namespace App\Static_L;

class Static_Learn
{

    private static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }
}
