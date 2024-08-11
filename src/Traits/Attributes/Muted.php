<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Muted
{
    public function muted(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('muted', $value);
        return $this;
    }
}
