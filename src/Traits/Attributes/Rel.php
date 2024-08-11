<?php

namespace Esayers\Html\Traits\Attributes;

trait Rel
{
    public function rel(string|bool|array $value)
    {
        $this->setAttribute('rel', $value);
    }
}
