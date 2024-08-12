<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Maxlength
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function maxlength(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('maxlength', $value);
        return $this;
    }
}