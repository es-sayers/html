<?php

namespace Esayers\Html\Traits\Attributes;

trait Dirname
{
    public function dirname(string|bool|array $value)
    {
        $this->setAttribute('dirname', $value);
    }
}
