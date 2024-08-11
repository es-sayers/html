<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Label
{
    public function label(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('label', $value);
        return $this;
    }
}
