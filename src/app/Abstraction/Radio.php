<?php

namespace App\Abstraction;

class Radio extends Booleans
{

    public function render()
    {
        return <<<HTML
        
        <input type="radio" name="{$this->name}" />

        HTML;
    }
}
