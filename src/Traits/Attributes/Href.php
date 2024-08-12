<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Href
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function href(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('href', $value);
        return $this;
    }
}
