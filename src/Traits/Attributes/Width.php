<?php

namespace Esayers\Html\Traits\Attributes;

trait Width
{
    public function width(string|bool|array $value)
    {
        $this->setAttribute('width', $value);
    }
}
