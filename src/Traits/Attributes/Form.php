<?php

namespace Esayers\Html\Traits\Attributes;

trait Form
{
    public function form(string|bool|array $value)
    {
        $this->setAttribute('form', $value);
    }
}
