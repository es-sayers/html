<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Usemap
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function usemap(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('usemap', $value);
        return $this;
    }
}
