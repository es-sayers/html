<?php

namespace Esayers\Html\Traits\Attributes;

trait Rowspan
{
    public function rowspan(string|bool|array $value)
    {
        $this->setAttribute('rowspan', $value);
    }
}
