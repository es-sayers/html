<?php

namespace Esayers\Html\Traits\Attributes;

trait Formtarget
{
    public function formtarget(string|bool|array $value)
    {
        $this->setAttribute('formtarget', $value);
    }
}
