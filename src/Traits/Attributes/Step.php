<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Step
{
    public function step(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('step', $value);
        return $this;
    }
}
