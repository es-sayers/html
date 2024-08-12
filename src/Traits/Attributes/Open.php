<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Open
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function open(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('open', $value);
        return $this;
    }
}
