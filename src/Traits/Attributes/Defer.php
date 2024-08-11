<?php

namespace Esayers\Html\Traits\Attributes;

trait Defer
{
    public function defer(string|bool|array $value)
    {
        $this->setAttribute('defer', $value);
    }
}
