<?php

namespace Esayers\Html\Traits\Attributes;

trait Value
{
    public function value(string|bool|array $value)
    {
        $this->setAttribute('value', $value);
    }
}
