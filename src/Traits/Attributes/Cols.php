<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Cols
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function cols(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('cols', $value);
        return $this;
    }
}
