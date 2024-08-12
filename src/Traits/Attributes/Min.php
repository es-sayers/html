<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Min
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function min(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('min', $value);
        return $this;
    }
}
