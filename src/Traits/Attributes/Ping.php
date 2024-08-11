<?php

namespace Esayers\Html\Traits\Attributes;

trait Ping
{
    public function ping(string|bool|array $value)
    {
        $this->setAttribute('ping', $value);
    }
}
