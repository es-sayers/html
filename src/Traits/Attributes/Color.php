<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Color
{
    public function color(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('color', $value);
        return $this;
    }
}
