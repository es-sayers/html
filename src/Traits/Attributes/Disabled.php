<?php

namespace Esayers\Html\Traits\Attributes;

trait Disabled
{
    public function disabled(string|bool|array $value)
    {
        $this->setAttribute('disabled', $value);
    }
}
