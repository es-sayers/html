<?php

namespace Esayers\Html\Traits\Attributes;

trait Start
{
    public function start(string|bool|array $value)
    {
        $this->setAttribute('start', $value);
    }
}
