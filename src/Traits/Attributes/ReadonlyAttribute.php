<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait ReadonlyAttribute
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function readonly(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('readonly', $value);
        return $this;
    }
}
