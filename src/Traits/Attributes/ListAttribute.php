<?php

namespace Esayers\Html\Traits\Attributes;

trait ListAttribute
{
    public function list(string|bool|array $value)
    {
        $this->setAttribute('list', $value);
    }
}
