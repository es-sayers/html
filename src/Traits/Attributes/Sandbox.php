<?php

namespace Esayers\Html\Traits\Attributes;

trait Sandbox
{
    public function sandbox(string|bool|array $value)
    {
        $this->setAttribute('sandbox', $value);
    }
}
