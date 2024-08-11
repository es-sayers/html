<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Required
{
    public function required(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('required', $value);
        return $this;
    }
}
