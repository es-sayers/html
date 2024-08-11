<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Max
{
    public function max(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('max', $value);
        return $this;
    }
}
