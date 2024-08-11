<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait ClassAttribute
{
    public function class(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('class', $value);
        return $this;
    }
}
