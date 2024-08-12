<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Data
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function data(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('data', $value);
        return $this;
    }
}
