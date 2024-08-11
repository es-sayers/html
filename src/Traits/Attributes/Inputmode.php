<?php

namespace Esayers\Html\Traits\Attributes;

trait Inputmode
{
    public function inputmode(string|bool|array $value)
    {
        $this->setAttribute('inputmode', $value);
    }
}
