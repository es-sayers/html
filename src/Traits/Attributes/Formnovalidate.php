<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Formnovalidate
{
    /**
     * HTML Attribute
     * @param string|bool|array $value
     * @return $this
     */
    public function formnovalidate(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('formnovalidate', $value);
        return $this;
    }
}
