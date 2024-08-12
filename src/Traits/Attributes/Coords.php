<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Coords
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function coords(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('coords', $value);
        return $this;
    }
}
