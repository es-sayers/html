<?php

namespace Esayers\Html\Traits\Attributes;

trait Coords
{
    public function coords(string|bool|array $value)
    {
        $this->setAttribute('coords', $value);
    }
}
