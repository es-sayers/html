<?php

namespace Esayers\Html\Traits\Attributes;

trait Accesskey
{
    public function accesskey(string|bool|array $value)
    {
        $this->setAttribute('accesskey', $value);
    }
}
