<?php

namespace Esayers\Html\Traits\Attributes;

trait Align
{
    public function align(string|bool|array $value)
    {
        $this->setAttribute('align', $value);
    }
}
