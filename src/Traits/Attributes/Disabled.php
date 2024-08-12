<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Disabled
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function disabled(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('disabled', $value);
        return $this;
    }
}
