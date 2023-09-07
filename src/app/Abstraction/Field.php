<?php

namespace App\Abstraction;

abstract class Field
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function render();
}
