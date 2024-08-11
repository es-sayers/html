<?php

namespace Esayers\Html\Traits\Attributes;

trait Accept
{
    public function accept(string|bool|array $value)
    {
        $this->setAttribute('accept', $value);
    }
}
