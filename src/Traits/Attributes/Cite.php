<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Cite
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function cite(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('cite', $value);
        return $this;
    }
}
