<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Height
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function height(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('height', $value);
        return $this;
    }
}
