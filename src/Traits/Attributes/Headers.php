<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Headers
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function headers(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('headers', $value);
        return $this;
    }
}
