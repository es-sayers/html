<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Popover
{
    public function popover(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('popover', $value);
        return $this;
    }
}
