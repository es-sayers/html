<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Size
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function size(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('size', $value);
        return $this;
    }
}
