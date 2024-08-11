<?php

namespace Esayers\Html\Traits\Attributes;

trait Rows
{
    public function rows(string|bool|array $value)
    {
        $this->setAttribute('rows', $value);
    }
}
