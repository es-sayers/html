<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Cols
{
    public function cols(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('cols', $value);
        return $this;
    }
}
