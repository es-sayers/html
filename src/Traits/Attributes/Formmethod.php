<?php

namespace Esayers\Html\Traits\Attributes;

trait Formmethod
{
    public function formmethod(string|bool|array $value)
    {
        $this->setAttribute('formmethod', $value);
    }
}
