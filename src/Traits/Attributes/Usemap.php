<?php

namespace Esayers\Html\Traits\Attributes;

trait Usemap
{
    public function usemap(string|bool|array $value)
    {
        $this->setAttribute('usemap', $value);
    }
}
