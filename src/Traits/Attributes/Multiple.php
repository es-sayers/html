<?php

namespace Esayers\Html\Traits\Attributes;

trait Multiple
{
    public function multiple(string|bool|array $value)
    {
        $this->setAttribute('multiple', $value);
    }
}
