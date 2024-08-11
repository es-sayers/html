<?php

namespace Esayers\Html\Traits\Attributes;

trait Referrerpolicy
{
    public function referrerpolicy(string|bool|array $value)
    {
        $this->setAttribute('referrerpolicy', $value);
    }
}
