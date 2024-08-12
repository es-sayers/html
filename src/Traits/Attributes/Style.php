<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Style
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function style(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('style', $value);
        return $this;
    }
}
