<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Wrap
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function wrap(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('wrap', $value);
        return $this;
    }
}
