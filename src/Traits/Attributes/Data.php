<?php

namespace Esayers\Html\Traits\Attributes;

trait Data
{
    public function data(string|bool|array $value)
    {
        $this->setAttribute('data', $value);
    }
}
