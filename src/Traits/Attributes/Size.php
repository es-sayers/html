<?php

namespace Esayers\Html\Traits\Attributes;

trait Size
{
    public function size(string|bool|array $value)
    {
        $this->setAttribute('size', $value);
    }
}
