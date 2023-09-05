<?php

namespace App;

class ToasterPro extends Toaster
{

    public int $size = 4;
    // you can only override public properties

    public function __construct()
    {
    }

    public function toastBagle()
    {
        foreach ($this->slices as $i => $slice) {
            # code...
            echo ($i + 1) . ': Toasting Bagle Option ' . $slice . PHP_EOL;
        }
    }
}
