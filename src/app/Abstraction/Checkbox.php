<?php

namespace App\Abstraction;

class Checkbox extends Field
{
    public function render()
    {
        return <<<HTML

        <input type="checkbox" name="{$this->name}" />

        HTML;
    }
}
