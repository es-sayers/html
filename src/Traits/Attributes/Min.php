<?php

namespace Esayers\Html\Traits\Attributes;

trait Min
{
    public function min(string|bool|array $value)
    {
        $this->setAttribute('min', $value);
    }
}
