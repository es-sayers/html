<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Multiple
{
    public function multiple(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('multiple', $value);
        return $this;
    }
}
