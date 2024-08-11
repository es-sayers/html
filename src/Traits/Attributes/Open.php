<?php

namespace Esayers\Html\Traits\Attributes;

trait Open
{
    public function open(string|bool|array $value)
    {
        $this->setAttribute('open', $value);
    }
}
