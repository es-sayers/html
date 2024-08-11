<?php

namespace Esayers\Html\Traits\Attributes;

trait Muted
{
    public function muted(string|bool|array $value)
    {
        $this->setAttribute('muted', $value);
    }
}
