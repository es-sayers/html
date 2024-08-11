<?php

namespace Esayers\Html\Traits\Attributes;

trait Type
{
    public function type(string|bool|array $value)
    {
        $this->setAttribute('type', $value);
    }
}
