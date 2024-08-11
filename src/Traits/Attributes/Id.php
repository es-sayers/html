<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Id
{
    public function id(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('id', $value);
        return $this;
    }
}
