<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Width
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function width(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('width', $value);
        return $this;
    }
}
