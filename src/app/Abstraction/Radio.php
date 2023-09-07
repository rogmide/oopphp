<?php

namespace App\Abstraction;

require '../app/Abstraction/Booleans.php';
class Radio extends Booleans
{

    public function render()
    {
        return <<<HTML
        
        <input type="radio" name="{$this->name}" />

        HTML;
    }
}
