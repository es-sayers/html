<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Accept
{
    public function accept(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('accept', $value);
        return $this;
    }
}
