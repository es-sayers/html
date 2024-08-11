<?php

namespace Esayers\Html\Traits\Attributes;

trait Label
{
    public function label(string|bool|array $value)
    {
        $this->setAttribute('label', $value);
    }
}
