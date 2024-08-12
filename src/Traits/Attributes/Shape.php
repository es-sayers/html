<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Shape
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function shape(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('shape', $value);
        return $this;
    }
}
