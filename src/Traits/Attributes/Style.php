<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Style
{
    public function style(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('style', $value);
        return $this;
    }
}
