<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Colspan
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function colspan(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('colspan', $value);
        return $this;
    }
}
