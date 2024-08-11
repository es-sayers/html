<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Scope
{
    public function scope(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('scope', $value);
        return $this;
    }
}
