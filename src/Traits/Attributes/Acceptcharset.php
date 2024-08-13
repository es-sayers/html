<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Acceptcharset
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function acceptcharset(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('accept-charset', $value);
        return $this;
    }
}
