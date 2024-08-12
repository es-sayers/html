<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Enctype
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function enctype(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('enctype', $value);
        return $this;
    }
}
