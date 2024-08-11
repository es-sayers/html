<?php

namespace Esayers\Html\Traits\Attributes;

trait Popover
{
    public function popover(string|bool|array $value)
    {
        $this->setAttribute('popover', $value);
    }
}
