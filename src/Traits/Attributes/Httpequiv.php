<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Httpequiv
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function httpequiv(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('http-equiv', $value);
        return $this;
    }
}
