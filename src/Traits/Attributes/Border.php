<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Border
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function border(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('border', $value);
        return $this;
    }
}
