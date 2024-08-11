<?php

namespace Esayers\Html\Traits\Attributes;

trait Longdesc
{
    public function longdesc(string|bool|array $value)
    {
        $this->setAttribute('longdesc', $value);
    }
}
