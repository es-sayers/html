<?php

namespace Esayers\Html\Traits\Attributes;

trait Shape
{
    public function shape(string|bool|array $value)
    {
        $this->setAttribute('shape', $value);
    }
}
