<?php

namespace App\Abstraction;

class Checkbox extends Boolean
{

    public function render()
    {
        return <<<HTML
        
        <input type="text" name="{$this->name}" />

        HTML;
    }
}
