<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Maxlength
{
    public function maxlength(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('maxlength', $value);
        return $this;
    }
}
