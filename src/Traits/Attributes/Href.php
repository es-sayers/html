<?php

namespace Esayers\Html\Traits\Attributes;

trait Href
{
    public function href(string|bool|array $value)
    {
        $this->setAttribute('href', $value);
    }
}
