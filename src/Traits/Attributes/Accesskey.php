<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Accesskey
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function accesskey(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('accesskey', $value);
        return $this;
    }
}
