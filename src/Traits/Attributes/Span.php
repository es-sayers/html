<?php

namespace Esayers\Html\Traits\Attributes;

trait Span
{
    public function span(string|bool|array $value)
    {
        $this->setAttribute('span', $value);
    }
}
