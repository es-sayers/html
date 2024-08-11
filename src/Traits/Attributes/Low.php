<?php

namespace Esayers\Html\Traits\Attributes;

trait Low
{
    public function low(string|bool|array $value)
    {
        $this->setAttribute('low', $value);
    }
}
