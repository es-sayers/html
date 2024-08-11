<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Coords
{
    public function coords(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('coords', $value);
        return $this;
    }
}
