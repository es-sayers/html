<?php

namespace Esayers\Html\Traits\Attributes;

trait Formenctype
{
    public function formenctype(string|bool|array $value)
    {
        $this->setAttribute('formenctype', $value);
    }
}
