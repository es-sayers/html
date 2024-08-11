<?php

namespace Esayers\Html\Traits\Attributes;

trait Autofocus
{
    public function autofocus(string|bool|array $value)
    {
        $this->setAttribute('autofocus', $value);
    }
}
