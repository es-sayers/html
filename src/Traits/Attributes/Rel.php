<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Rel
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function rel(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('rel', $value);
        return $this;
    }
}
