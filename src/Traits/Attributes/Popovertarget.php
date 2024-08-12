<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Popovertarget
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function popovertarget(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('popovertarget', $value);
        return $this;
    }
}
