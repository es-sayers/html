<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Low
{
    public function low(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('low', $value);
        return $this;
    }
}
