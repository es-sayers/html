<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Defer
{
    public function defer(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('defer', $value);
        return $this;
    }
}
