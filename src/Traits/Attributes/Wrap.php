<?php

namespace Esayers\Html\Traits\Attributes;

trait Wrap
{
    public function wrap(string|bool|array $value)
    {
        $this->setAttribute('wrap', $value);
    }
}
