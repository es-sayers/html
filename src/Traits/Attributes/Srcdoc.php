<?php

namespace Esayers\Html\Traits\Attributes;

trait Srcdoc
{
    public function srcdoc(string|bool|array $value)
    {
        $this->setAttribute('srcdoc', $value);
    }
}
