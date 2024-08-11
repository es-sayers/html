<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Formnovalidate
{
    public function formnovalidate(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('formnovalidate', $value);
        return $this;
    }
}
