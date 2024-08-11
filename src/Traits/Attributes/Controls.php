<?php

namespace Esayers\Html\Traits\Attributes;

trait Controls
{
    public function controls(string|bool|array $value)
    {
        $this->setAttribute('controls', $value);
    }
}
