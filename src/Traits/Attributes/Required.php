<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Required
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function required(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('required', $value);
        return $this;
    }
}
