<?php

namespace Esayers\Html\Traits\Attributes;

trait Target
{
    public function target(string|bool|array $value)
    {
        $this->setAttribute('target', $value);
    }
}
