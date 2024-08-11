<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Datetime
{
    public function datetime(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('datetime', $value);
        return $this;
    }
}
