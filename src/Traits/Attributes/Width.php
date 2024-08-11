<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Width
{
    public function width(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('width', $value);
        return $this;
    }
}
