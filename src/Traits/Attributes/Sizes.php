<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Sizes
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function sizes(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('sizes', $value);
        return $this;
    }
}
