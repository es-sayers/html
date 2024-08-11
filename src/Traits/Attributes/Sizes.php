<?php

namespace Esayers\Html\Traits\Attributes;

trait Sizes
{
    public function sizes(string|bool|array $value)
    {
        $this->setAttribute('sizes', $value);
    }
}
