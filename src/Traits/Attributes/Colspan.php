<?php

namespace Esayers\Html\Traits\Attributes;

trait Colspan
{
    public function colspan(string|bool|array $value)
    {
        $this->setAttribute('colspan', $value);
    }
}
