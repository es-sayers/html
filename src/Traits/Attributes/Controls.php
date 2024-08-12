<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Controls
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function controls(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('controls', $value);
        return $this;
    }
}
