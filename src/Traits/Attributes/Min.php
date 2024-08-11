<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Min
{
    public function min(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('min', $value);
        return $this;
    }
}
