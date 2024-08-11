<?php

namespace Esayers\Html\Traits\Attributes;

trait Enterkeyhint
{
    public function enterkeyhint(string|bool|array $value)
    {
        $this->setAttribute('enterkeyhint', $value);
    }
}
