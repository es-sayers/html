<?php

namespace Esayers\Html\Traits\Attributes;

trait Httpequiv
{
    public function httpequiv(string|bool|array $value)
    {
        $this->setAttribute('httpequiv', $value);
    }
}
