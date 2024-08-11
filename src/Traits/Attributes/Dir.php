<?php

namespace Esayers\Html\Traits\Attributes;

trait Dir
{
    public function dir(string|bool|array $value)
    {
        $this->setAttribute('dir', $value);
    }
}
