<?php


namespace App\Abstraction;

require '../app/Abstraction/Field.php';

class Text extends Field
{
    public function render()
    {
        return <<<HTML
        
        <input type="text" name="{$this->name}" />

        HTML;
    }
}
