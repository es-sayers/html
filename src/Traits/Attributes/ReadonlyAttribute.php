<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait ReadonlyAttribute
{
    public function readonly(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('readonly', $value);
        return $this;
    }
}
