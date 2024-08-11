<?php

namespace Esayers\Html\Traits\Attributes;

trait Abbr
{
    public function abbr(string|bool|array $value)
    {
        $this->setAttribute('abbr', $value);
    }
}
