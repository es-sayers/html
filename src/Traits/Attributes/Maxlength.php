<?php

namespace Esayers\Html\Traits\Attributes;

trait Maxlength
{
    public function maxlength(string|bool|array $value)
    {
        $this->setAttribute('maxlength', $value);
    }
}
