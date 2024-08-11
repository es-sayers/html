<?php

namespace Esayers\Html\Traits\Attributes;

trait Xmlns
{
    public function xmlns(string|bool|array $value)
    {
        $this->setAttribute('xmlns', $value);
    }
}
