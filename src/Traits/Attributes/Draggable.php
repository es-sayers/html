<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Draggable
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function draggable(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('draggable', $value);
        return $this;
    }
}
