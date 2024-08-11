<?php

namespace Esayers\Html\Traits\Attributes;

trait Novalidate
{
    public function novalidate(string|bool|array $value)
    {
        $this->setAttribute('novalidate', $value);
    }
}
