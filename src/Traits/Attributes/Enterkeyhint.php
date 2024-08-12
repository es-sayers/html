<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Enterkeyhint
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function enterkeyhint(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('enterkeyhint', $value);
        return $this;
    }
}
