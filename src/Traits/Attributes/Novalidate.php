<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Novalidate
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function novalidate(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('novalidate', $value);
        return $this;
    }
}
