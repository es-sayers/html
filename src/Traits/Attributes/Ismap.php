<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Ismap
{
    public function ismap(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('ismap', $value);
        return $this;
    }
}
