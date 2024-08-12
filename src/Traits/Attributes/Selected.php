<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Selected
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function selected(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('selected', $value);
        return $this;
    }
}
