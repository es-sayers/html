<?php

namespace Esayers\Html\Traits\Attributes;

trait Max
{
    public function max(string|bool|array $value)
    {
        $this->setAttribute('max', $value);
    }
}
