<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Rowspan
{
    public function rowspan(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('rowspan', $value);
        return $this;
    }
}
