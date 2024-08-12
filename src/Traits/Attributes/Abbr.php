<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Abbr
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function abbr(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('abbr', $value);
        return $this;
    }
}
