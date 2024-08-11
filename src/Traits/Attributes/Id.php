<?php

namespace Esayers\Html\Traits\Attributes;

trait Id
{
    public function id(string|bool|array $value)
    {
        $this->setAttribute('id', $value);
    }
}
