<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait High
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function high(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('high', $value);
        return $this;
    }
}
