<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Label
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function label(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('label', $value);
        return $this;
    }
}
