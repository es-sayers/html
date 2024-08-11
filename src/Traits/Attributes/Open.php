<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Open
{
    public function open(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('open', $value);
        return $this;
    }
}
