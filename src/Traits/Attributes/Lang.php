<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Lang
{
    public function lang(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('lang', $value);
        return $this;
    }
}
