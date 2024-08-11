<?php

namespace Esayers\Html\Traits\Attributes;

trait Kind
{
    public function kind(string|bool|array $value)
    {
        $this->setAttribute('kind', $value);
    }
}
