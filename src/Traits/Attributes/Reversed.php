<?php

namespace Esayers\Html\Traits\Attributes;

trait Reversed
{
    public function reversed(string|bool|array $value)
    {
        $this->setAttribute('reversed', $value);
    }
}
