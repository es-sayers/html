<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Defer
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function defer(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('defer', $value);
        return $this;
    }
}
