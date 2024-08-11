<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Abbr
{
    public function abbr(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('abbr', $value);
        return $this;
    }
}
