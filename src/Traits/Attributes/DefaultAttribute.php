<?php

namespace Esayers\Html\Traits\Attributes;

trait DefaultAttribute
{
    public function default(string|bool|array $value)
    {
        $this->setAttribute('default', $value);
    }
}
