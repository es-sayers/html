<?php

namespace Esayers\Html\Traits\Attributes;

trait Minlength
{
    public function minlength(string|bool|array $value)
    {
        $this->setAttribute('minlength', $value);
    }
}
