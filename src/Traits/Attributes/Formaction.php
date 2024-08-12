<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Formaction
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function formaction(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('formaction', $value);
        return $this;
    }
}
