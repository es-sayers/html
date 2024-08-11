<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Autofocus
{
    public function autofocus(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('autofocus', $value);
        return $this;
    }
}
