<?php

namespace Esayers\Html\Traits\Attributes;

trait Border
{
    public function border(string|bool|array $value)
    {
        $this->setAttribute('border', $value);
    }
}
