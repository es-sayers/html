<?php

namespace Esayers\Html\Traits\Attributes;

trait ReadonlyAttribute
{
    public function readonly(string|bool|array $value)
    {
        $this->setAttribute('readonly', $value);
    }
}
