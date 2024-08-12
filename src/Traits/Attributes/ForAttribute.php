<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait ForAttribute
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function for(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('for', $value);
        return $this;
    }
}
