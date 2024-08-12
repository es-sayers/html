<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Type
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function type(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('type', $value);
        return $this;
    }
}
