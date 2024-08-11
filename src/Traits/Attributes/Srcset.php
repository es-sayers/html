<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Srcset
{
    public function srcset(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('srcset', $value);
        return $this;
    }
}
