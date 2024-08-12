<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Bgcolor
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function bgcolor(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('bgcolor', $value);
        return $this;
    }
}
