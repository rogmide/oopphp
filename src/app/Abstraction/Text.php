<?php

namespace App\Abstraction;

class Text extends Field
{

    public function __construct()
    {
    }

    public function render()
    {
        return <<<HTML
        
        <input type="text" name="{$this->name}" />

        HTML;
    }
}