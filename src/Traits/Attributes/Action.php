<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Action
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function action(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('action', $value);
        return $this;
    }
}
