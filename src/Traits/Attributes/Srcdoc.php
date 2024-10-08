<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Srcdoc
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function srcdoc(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('srcdoc', $value);
        return $this;
    }
}
