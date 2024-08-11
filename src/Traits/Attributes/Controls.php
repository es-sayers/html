<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Controls
{
    public function controls(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('controls', $value);
        return $this;
    }
}
