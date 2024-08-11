<?php

namespace Esayers\Html\Traits\Attributes;

trait Inert
{
    public function inert(string|bool|array $value)
    {
        $this->setAttribute('inert', $value);
    }
}
