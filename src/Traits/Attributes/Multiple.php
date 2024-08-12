<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Multiple
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function multiple(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('multiple', $value);
        return $this;
    }
}
