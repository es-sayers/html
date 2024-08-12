<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Title
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function title(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('title', $value);
        return $this;
    }
}
