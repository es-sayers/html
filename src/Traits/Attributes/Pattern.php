<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Pattern
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function pattern(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('pattern', $value);
        return $this;
    }
}
