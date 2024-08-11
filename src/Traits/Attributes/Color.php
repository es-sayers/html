<?php

namespace Esayers\Html\Traits\Attributes;

trait Color
{
    public function color(string|bool|array $value)
    {
        $this->setAttribute('color', $value);
    }
}
