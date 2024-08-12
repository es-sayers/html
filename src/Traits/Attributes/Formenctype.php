<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Formenctype
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function formenctype(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('formenctype', $value);
        return $this;
    }
}
