<?php

namespace Esayers\Html\Traits\Attributes;

trait Alt
{
    public function alt(string|bool|array $value)
    {
        $this->setAttribute('alt', $value);
    }
}
