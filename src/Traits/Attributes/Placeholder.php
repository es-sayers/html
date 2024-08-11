<?php

namespace Esayers\Html\Traits\Attributes;

trait Placeholder
{
    public function placeholder(string|bool|array $value)
    {
        $this->setAttribute('placeholder', $value);
    }
}
