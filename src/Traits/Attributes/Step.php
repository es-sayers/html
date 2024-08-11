<?php

namespace Esayers\Html\Traits\Attributes;

trait Step
{
    public function step(string|bool|array $value)
    {
        $this->setAttribute('step', $value);
    }
}
