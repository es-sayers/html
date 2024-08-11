<?php

namespace Esayers\Html\Traits\Attributes;

trait Formaction
{
    public function formaction(string|bool|array $value)
    {
        $this->setAttribute('formaction', $value);
    }
}
