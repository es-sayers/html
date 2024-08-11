<?php

namespace Esayers\Html\Traits\Attributes;

trait Autocomplete
{
    public function autocomplete(string|bool|array $value)
    {
        $this->setAttribute('autocomplete', $value);
    }
}
