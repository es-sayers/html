<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Scope
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function scope(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('scope', $value);
        return $this;
    }
}
