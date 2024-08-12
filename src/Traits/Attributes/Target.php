<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Target
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function target(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('target', $value);
        return $this;
    }
}
