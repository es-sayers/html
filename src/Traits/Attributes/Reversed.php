<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Reversed
{
    public function reversed(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('reversed', $value);
        return $this;
    }
}
