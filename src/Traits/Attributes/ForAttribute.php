<?php

namespace Esayers\Html\Traits\Attributes;

trait ForAttribute
{
    public function for(string|bool|array $value)
    {
        $this->setAttribute('for', $value);
    }
}
