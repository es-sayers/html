<?php

namespace Esayers\Html\Traits\Attributes;

use Esayers\Html\Elements\AbstractTag;

trait Sandbox
{
    public function sandbox(string|bool|array $value): AbstractTag
    {
        $this->setAttribute('sandbox', $value);
        return $this;
    }
}
