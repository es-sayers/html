<?php

namespace Esayers\Html\Traits\Attributes;

trait Enctype
{
    public function enctype(string|bool|array $value)
    {
        $this->setAttribute('enctype', $value);
    }
}
