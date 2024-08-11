<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Translate
{
    public function translate(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('translate', $value);
        return $this;
    }
}
