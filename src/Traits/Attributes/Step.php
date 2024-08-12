<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Step
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function step(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('step', $value);
        return $this;
    }
}
