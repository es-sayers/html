<?php

namespace Esayers\Html\Traits\Attributes;

trait Hreflang
{
    public function hreflang(string|bool|array $value)
    {
        $this->setAttribute('hreflang', $value);
    }
}
