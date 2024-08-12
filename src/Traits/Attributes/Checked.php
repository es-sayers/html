<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Checked
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function checked(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('checked', $value);
        return $this;
    }
}
