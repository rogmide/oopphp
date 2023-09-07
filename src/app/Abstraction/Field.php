<?php

namespace App\Abstraction;

class Field
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return '';
    }
}
