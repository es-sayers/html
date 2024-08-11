<?php

namespace Esayers\Html\Traits\Attributes;

trait Loop
{
    public function loop(string|bool|array $value)
    {
        $this->setAttribute('loop', $value);
    }
}
