<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Formenctype
{
    public function formenctype(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('formenctype', $value);
        return $this;
    }
}
