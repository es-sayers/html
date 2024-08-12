<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Contenteditable
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function contenteditable(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('contenteditable', $value);
        return $this;
    }
}
