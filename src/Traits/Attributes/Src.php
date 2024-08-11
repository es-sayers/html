<?php

namespace Esayers\Html\Traits\Attributes;

trait Src
{
    public function src(string|bool|array $value)
    {
        $this->setAttribute('src', $value);
    }
}
