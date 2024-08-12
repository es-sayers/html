<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Kind
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function kind(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('kind', $value);
        return $this;
    }
}
