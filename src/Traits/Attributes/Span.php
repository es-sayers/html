<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Span
{
    public function span(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('span', $value);
        return $this;
    }
}
