<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Loop
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function loop(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('loop', $value);
        return $this;
    }
}
