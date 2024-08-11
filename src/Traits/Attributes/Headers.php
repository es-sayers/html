<?php

namespace Esayers\Html\Traits\Attributes;

trait Headers
{
    public function headers(string|bool|array $value)
    {
        $this->setAttribute('headers', $value);
    }
}
