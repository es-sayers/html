<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Loop
{
    public function loop(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('loop', $value);
        return $this;
    }
}
