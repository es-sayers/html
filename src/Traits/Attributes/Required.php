<?php

namespace Esayers\Html\Traits\Attributes;

trait Required
{
    public function required(string|bool|array $value)
    {
        $this->setAttribute('required', $value);
    }
}
