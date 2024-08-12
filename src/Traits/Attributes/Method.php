<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Method
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function method(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('method', $value);
        return $this;
    }
}
