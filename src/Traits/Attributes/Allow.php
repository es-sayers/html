<?php

namespace Esayers\Html\Traits\Attributes;

trait Allow
{
    public function allow(string|bool|array $value)
    {
        $this->setAttribute('allow', $value);
    }
}
