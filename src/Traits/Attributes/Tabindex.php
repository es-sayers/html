<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Tabindex
{
    public function tabindex(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('tabindex', $value);
        return $this;
    }
}
