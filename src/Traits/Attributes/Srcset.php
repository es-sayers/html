<?php

namespace Esayers\Html\Traits\Attributes;

trait Srcset
{
    public function srcset(string|bool|array $value)
    {
        $this->setAttribute('srcset', $value);
    }
}
