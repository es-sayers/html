<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Span
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function span(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('span', $value);
        return $this;
    }
}
