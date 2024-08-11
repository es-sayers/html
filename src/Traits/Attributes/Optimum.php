<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Optimum
{
    public function optimum(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('optimum', $value);
        return $this;
    }
}
