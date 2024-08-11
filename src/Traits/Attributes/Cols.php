<?php

namespace Esayers\Html\Traits\Attributes;

trait Cols
{
    public function cols(string|bool|array $value)
    {
        $this->setAttribute('cols', $value);
    }
}
