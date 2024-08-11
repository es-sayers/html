<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Accesskey
{
    public function accesskey(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('accesskey', $value);
        return $this;
    }
}
