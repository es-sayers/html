<?php

namespace Esayers\Html\Traits\Attributes;

trait Ismap
{
    public function ismap(string|bool|array $value)
    {
        $this->setAttribute('ismap', $value);
    }
}
