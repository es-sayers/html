<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Formaction
{
    public function formaction(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('formaction', $value);
        return $this;
    }
}
