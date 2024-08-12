<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Xmlns
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function xmlns(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('xmlns', $value);
        return $this;
    }
}
