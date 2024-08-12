<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Tabindex
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function tabindex(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('tabindex', $value);
        return $this;
    }
}
