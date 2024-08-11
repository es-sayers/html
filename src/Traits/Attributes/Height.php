<?php

namespace Esayers\Html\Traits\Attributes;

trait Height
{
    public function height(string|bool|array $value)
    {
        $this->setAttribute('height', $value);
    }
}
