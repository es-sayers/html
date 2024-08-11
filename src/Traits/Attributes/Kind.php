<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Kind
{
    public function kind(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('kind', $value);
        return $this;
    }
}
