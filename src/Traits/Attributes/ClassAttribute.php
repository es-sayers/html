<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait ClassAttribute
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function class(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('class', $value);
        return $this;
    }
}
