<?php

namespace App;

class ToasterPro extends Toaster
{

    public int $size;
    // you can only override public properties

    public function __construct()
    {
        // need to inizializate the parent construct
        parent::__construct();
        $this->size = 4;
    }

    public function toastBagle()
    {
        foreach ($this->slices as $i => $slice) {
            # code...
            echo ($i + 1) . ': Toasting Bagle Option ' . $slice . PHP_EOL;
        }
    }

    public function addSlice($slice)
    {
        // Custom Code before the parent method
        parent::addSlice($slice);
    }
}
