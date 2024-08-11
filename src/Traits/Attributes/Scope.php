<?php

namespace Esayers\Html\Traits\Attributes;

trait Scope
{
    public function scope(string|bool|array $value)
    {
        $this->setAttribute('scope', $value);
    }
}
