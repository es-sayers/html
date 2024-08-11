<?php

namespace Esayers\Html\Traits\Attributes;

trait Datetime
{
    public function datetime(string|bool|array $value)
    {
        $this->setAttribute('datetime', $value);
    }
}
