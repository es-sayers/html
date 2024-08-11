<?php

namespace Esayers\Html\Traits\Attributes;

trait Cite
{
    public function cite(string|bool|array $value)
    {
        $this->setAttribute('cite', $value);
    }
}
