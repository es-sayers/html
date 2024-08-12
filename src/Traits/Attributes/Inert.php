<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Inert
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function inert(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('inert', $value);
        return $this;
    }
}
