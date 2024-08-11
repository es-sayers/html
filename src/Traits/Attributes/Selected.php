<?php

namespace Esayers\Html\Traits\Attributes;

trait Selected
{
    public function selected(string|bool|array $value)
    {
        $this->setAttribute('selected', $value);
    }
}
