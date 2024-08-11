<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Dirname
{
    public function dirname(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('dirname', $value);
        return $this;
    }
}
