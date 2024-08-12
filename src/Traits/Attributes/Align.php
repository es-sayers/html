<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Align
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function align(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('align', $value);
        return $this;
    }
}
