<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Preload
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function preload(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('preload', $value);
        return $this;
    }
}
