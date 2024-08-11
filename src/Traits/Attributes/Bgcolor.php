<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Bgcolor
{
    public function bgcolor(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('bgcolor', $value);
        return $this;
    }
}
