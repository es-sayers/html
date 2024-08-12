<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Ismap
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function ismap(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('ismap', $value);
        return $this;
    }
}
