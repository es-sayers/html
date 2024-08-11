<?php

namespace Esayers\Html\Traits\Attributes;

trait Async
{
    public function async(string|bool|array $value)
    {
        $this->setAttribute('async', $value);
    }
}
