<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Rows
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function rows(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('rows', $value);
        return $this;
    }
}
