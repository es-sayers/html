<?php

namespace Esayers\Html\Traits\Attributes;

trait Optimum
{
    public function optimum(string|bool|array $value)
    {
        $this->setAttribute('optimum', $value);
    }
}
