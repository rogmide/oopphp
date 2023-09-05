<?php

namespace App;

class FancyOven
{
    // composition
    private ToasterPro $toaster;

    public function __construct($toaster)
    {
        $this->toaster = $toaster;
    }

    public function fry()
    {
        // fry stuff
    }
    public function toast()
    {
        $this->toaster->toast();
    }
    public function toastBagle()
    {
        $this->toaster->toastBagle();
    }
}
