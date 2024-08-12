<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait ListAttribute
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function list(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('list', $value);
        return $this;
    }
}
