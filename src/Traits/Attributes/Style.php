<?php

namespace Esayers\Html\Traits\Attributes;

trait Style
{
    public function style(string|bool|array $value)
    {
        $this->setAttribute('style', $value);
    }
}
