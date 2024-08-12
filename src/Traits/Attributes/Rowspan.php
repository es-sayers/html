<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Rowspan
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function rowspan(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('rowspan', $value);
        return $this;
    }
}
