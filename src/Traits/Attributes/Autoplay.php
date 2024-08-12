<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Autoplay
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function autoplay(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('autoplay', $value);
        return $this;
    }
}
