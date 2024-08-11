<?php

namespace Esayers\Html\Traits\Attributes;

trait Preload
{
    public function preload(string|bool|array $value)
    {
        $this->setAttribute('preload', $value);
    }
}
