<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Headers
{
    public function headers(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('headers', $value);
        return $this;
    }
}
