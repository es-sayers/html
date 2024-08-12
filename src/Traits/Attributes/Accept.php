<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Accept
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function accept(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('accept', $value);
        return $this;
    }
}
