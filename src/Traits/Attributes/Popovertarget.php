<?php

namespace Esayers\Html\Traits\Attributes;

trait Popovertarget
{
    public function popovertarget(string|bool|array $value)
    {
        $this->setAttribute('popovertarget', $value);
    }
}
