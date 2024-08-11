<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Minlength
{
    public function minlength(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('minlength', $value);
        return $this;
    }
}
