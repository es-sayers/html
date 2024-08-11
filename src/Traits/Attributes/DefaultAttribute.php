<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait DefaultAttribute
{
    public function default(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('default', $value);
        return $this;
    }
}
