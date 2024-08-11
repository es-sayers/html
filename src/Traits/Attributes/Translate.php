<?php

namespace Esayers\Html\Traits\Attributes;

trait Translate
{
    public function translate(string|bool|array $value)
    {
        $this->setAttribute('translate', $value);
    }
}
