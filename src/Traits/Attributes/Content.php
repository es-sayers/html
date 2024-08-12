<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Content
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function content(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('content', $value);
        return $this;
    }
}
