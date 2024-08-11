<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Wrap
{
    public function wrap(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('wrap', $value);
        return $this;
    }
}
