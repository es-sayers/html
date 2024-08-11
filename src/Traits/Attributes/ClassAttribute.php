<?php

namespace Esayers\Html\Traits\Attributes;

trait ClassAttribute
{
    public function class(string|bool|array $value)
    {
        $this->setAttribute('class', $value);
    }
}
