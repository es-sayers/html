<?php

namespace Esayers\Html\Traits\Attributes;

trait Method
{
    public function method(string|bool|array $value)
    {
        $this->setAttribute('method', $value);
    }
}
