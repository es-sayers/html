<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Srclang
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function srclang(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('srclang', $value);
        return $this;
    }
}
