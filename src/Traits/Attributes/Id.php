<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Id
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function id(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('id', $value);
        return $this;
    }
}
