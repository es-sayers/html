<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Src
{
    public function src(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('src', $value);
        return $this;
    }
}
