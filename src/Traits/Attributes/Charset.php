<?php

namespace Esayers\Html\Traits\Attributes;

trait Charset
{
    public function charset(string|bool|array $value)
    {
        $this->setAttribute('charset', $value);
    }
}
