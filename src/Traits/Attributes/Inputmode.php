<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Inputmode
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function inputmode(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('inputmode', $value);
        return $this;
    }
}
