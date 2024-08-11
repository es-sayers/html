<?php

namespace Esayers\Html\Traits\Attributes;

trait Srclang
{
    public function srclang(string|bool|array $value)
    {
        $this->setAttribute('srclang', $value);
    }
}
