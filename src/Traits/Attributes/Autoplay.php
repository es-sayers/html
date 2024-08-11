<?php

namespace Esayers\Html\Traits\Attributes;

trait Autoplay
{
    public function autoplay(string|bool|array $value)
    {
        $this->setAttribute('autoplay', $value);
    }
}
