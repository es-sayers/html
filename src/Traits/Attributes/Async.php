<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Async
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function async(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('async', $value);
        return $this;
    }
}
