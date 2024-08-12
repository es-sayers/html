<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Value
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function value(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('value', $value);
        return $this;
    }
}
