<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Form
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function form(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('form', $value);
        return $this;
    }
}
