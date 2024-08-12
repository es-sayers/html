<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Placeholder
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function placeholder(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('placeholder', $value);
        return $this;
    }
}
