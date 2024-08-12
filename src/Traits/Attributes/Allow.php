<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Allow
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function allow(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('allow', $value);
        return $this;
    }
}
