<?php

namespace Esayers\Html\Traits\Attributes;

trait Bgcolor
{
    public function bgcolor(string|bool|array $value)
    {
        $this->setAttribute('bgcolor', $value);
    }
}
