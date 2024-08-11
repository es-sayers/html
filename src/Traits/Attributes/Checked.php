<?php

namespace Esayers\Html\Traits\Attributes;

trait Checked
{
    public function checked(string|bool|array $value)
    {
        $this->setAttribute('checked', $value);
    }
}
