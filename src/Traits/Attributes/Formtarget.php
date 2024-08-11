<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Formtarget
{
    public function formtarget(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('formtarget', $value);
        return $this;
    }
}
