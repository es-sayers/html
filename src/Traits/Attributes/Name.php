<?php

namespace Esayers\Html\Traits\Attributes;

trait Name
{
    public function name(string|bool|array $value)
    {
        $this->setAttribute('name', $value);
    }
}
