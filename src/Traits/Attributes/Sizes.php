<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Sizes
{
    public function sizes(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('sizes', $value);
        return $this;
    }
}
