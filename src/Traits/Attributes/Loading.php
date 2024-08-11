<?php

namespace Esayers\Html\Traits\Attributes;

trait Loading
{
    public function loading(string|bool|array $value)
    {
        $this->setAttribute('loading', $value);
    }
}
