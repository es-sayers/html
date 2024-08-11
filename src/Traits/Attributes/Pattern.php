<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Pattern
{
    public function pattern(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('pattern', $value);
        return $this;
    }
}
