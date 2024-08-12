<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Low
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function low(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('low', $value);
        return $this;
    }
}
