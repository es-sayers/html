<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Reversed
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function reversed(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('reversed', $value);
        return $this;
    }
}
