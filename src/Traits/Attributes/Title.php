<?php

namespace Esayers\Html\Traits\Attributes;

trait Title
{
    public function title(string|bool|array $value)
    {
        $this->setAttribute('title', $value);
    }
}
