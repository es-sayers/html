<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Dir
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function dir(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('dir', $value);
        return $this;
    }
}
