<?php

namespace Esayers\Html\Traits\Attributes;

trait Media
{
    public function media(string|bool|array $value)
    {
        $this->setAttribute('media', $value);
    }
}
