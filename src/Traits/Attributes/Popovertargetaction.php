<?php

namespace Esayers\Html\Traits\Attributes;

trait Popovertargetaction
{
    public function popovertargetaction(string|bool|array $value)
    {
        $this->setAttribute('popovertargetaction', $value);
    }
}
