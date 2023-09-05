<?php

namespace App;

class Toaster
{

    public array $slices = [];
    public int $size = 2;

    public function __construct()
    {
        // $this->slices = [];
        // $this->size = 2;
    }

    public function addSlice($slices)
    {
        if (count($this->slices) < $this->size) {
            # code...
            $this->slices[] = $slices;
        }
    }

    public function toast()
    {
        foreach ($this->slices as $i => $slice) {
            # code...
            echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
        }
    }
}
