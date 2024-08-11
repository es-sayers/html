<?php

namespace Esayers\Html\Traits\Attributes;

trait Formnovalidate
{
    public function formnovalidate(string|bool|array $value)
    {
        $this->setAttribute('formnovalidate', $value);
    }
}
