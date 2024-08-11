<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Name
{
    public function name(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('name', $value);
        return $this;
    }
}
