<?php

namespace Esayers\Html\Traits\Attributes;

trait Tabindex
{
    public function tabindex(string|bool|array $value)
    {
        $this->setAttribute('tabindex', $value);
    }
}
