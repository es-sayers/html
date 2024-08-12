<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Hreflang
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function hreflang(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('hreflang', $value);
        return $this;
    }
}
