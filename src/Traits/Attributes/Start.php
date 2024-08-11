<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Start
{
    public function start(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('start', $value);
        return $this;
    }
}
