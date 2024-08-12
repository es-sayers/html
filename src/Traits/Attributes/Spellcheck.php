<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Spellcheck
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function spellcheck(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('spellcheck', $value);
        return $this;
    }
}
