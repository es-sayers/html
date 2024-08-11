<?php

namespace Esayers\Html\Traits\Attributes;

trait High
{
    public function high(string|bool|array $value)
    {
        $this->setAttribute('high', $value);
    }
}
