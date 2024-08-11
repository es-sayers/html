<?php

namespace Esayers\Html\Traits\Attributes;

trait Content
{
    public function content(string|bool|array $value)
    {
        $this->setAttribute('content', $value);
    }
}
