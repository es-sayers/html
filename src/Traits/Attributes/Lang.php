<?php

namespace Esayers\Html\Traits\Attributes;

trait Lang
{
    public function lang(string|bool|array $value)
    {
        $this->setAttribute('lang', $value);
    }
}
