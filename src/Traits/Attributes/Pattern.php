<?php

namespace Esayers\Html\Traits\Attributes;

trait Pattern
{
    public function pattern(string|bool|array $value)
    {
        $this->setAttribute('pattern', $value);
    }
}
